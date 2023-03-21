# Copyright 2018 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

"""This script is used to synthesize generated parts of this library."""

import logging
from pathlib import Path
import subprocess

import synthtool as s
from synthtool.languages import php
from synthtool import _tracked_paths

logging.basicConfig(level=logging.DEBUG)

src = Path(f"../{php.STAGING_DIR}/Container").resolve()
dest = Path().resolve()

# Added so that we can pass copy_excludes in the owlbot_main() call
_tracked_paths.add(src)

php.owlbot_main(src=src, dest=dest)


# Fix class references in gapic samples
for version in ['V1']:
    pathExpr = 'src/' + version + '/Gapic/ClusterManagerGapicClient.php'

    types = {
        'new Cluster': r'new Google\\Cloud\\Container\\'+ version + r'\\Cluster',
        'new NodePoolAutoscaling': r'new Google\\Cloud\\Container\\'+ version + r'\\NodePoolAutoscaling',
        'new AddonsConfig': r'new Google\\Cloud\\Container\\'+ version + r'\\AddonsConfig',
        '= Action::': r'= Google\\Cloud\\Container\\'+ version + r'\\SetMasterAuthRequest\\Action::',
        'new MasterAuth': r'new Google\\Cloud\\Container\\'+ version + r'\\MasterAuth',
        'new NodePool': r'new Google\\Cloud\\Container\\'+ version + r'\\NodePool',
        'new NodeManagement': r'new Google\\Cloud\\Container\\'+ version + r'\\NodeManagement',
        'new NetworkPolicy': r'new Google\\Cloud\\Container\\'+ version + r'\\NetworkPolicy',
        'new MaintenancePolicy': r'new Google\\Cloud\\Container\\'+ version + r'\\MaintenancePolicy',
    }

    for search, replace in types.items():
        s.replace(
            pathExpr,
            search,
            replace
)

### [START] protoc backwards compatibility fixes

# roll back to private properties.
s.replace(
    "src/**/V*/**/*.php",
    r"Generated from protobuf field ([^\n]{0,})\n\s{5}\*/\n\s{4}protected \$",
    r"""Generated from protobuf field \1
     */
    private $""")

# Replace "Unwrapped" with "Value" for method names.
s.replace(
    "src/**/V*/**/*.php",
    r"public function ([s|g]\w{3,})Unwrapped",
    r"public function \1Value"
)

### [END] protoc backwards compatibility fixes

# fix relative cloud.google.com links
s.replace(
    "src/**/V*/**/*.php",
    r"(.{0,})\]\((/.{0,})\)",
    r"\1](https://cloud.google.com\2)"
)
