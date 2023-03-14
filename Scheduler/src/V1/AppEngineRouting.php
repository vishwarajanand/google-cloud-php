<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/scheduler/v1/target.proto

namespace Google\Cloud\Scheduler\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * App Engine Routing.
 * For more information about services, versions, and instances see
 * [An Overview of App
 * Engine](https://cloud.google.com/appengine/docs/python/an-overview-of-app-engine),
 * [Microservices Architecture on Google App
 * Engine](https://cloud.google.com/appengine/docs/python/microservices-on-app-engine),
 * [App Engine Standard request
 * routing](https://cloud.google.com/appengine/docs/standard/python/how-requests-are-routed),
 * and [App Engine Flex request
 * routing](https://cloud.google.com/appengine/docs/flexible/python/how-requests-are-routed).
 *
 * Generated from protobuf message <code>google.cloud.scheduler.v1.AppEngineRouting</code>
 */
class AppEngineRouting extends \Google\Protobuf\Internal\Message
{
    /**
     * App service.
     * By default, the job is sent to the service which is the default
     * service when the job is attempted.
     *
     * Generated from protobuf field <code>string service = 1;</code>
     */
    private $service = '';
    /**
     * App version.
     * By default, the job is sent to the version which is the default
     * version when the job is attempted.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     */
    private $version = '';
    /**
     * App instance.
     * By default, the job is sent to an instance which is available when
     * the job is attempted.
     * Requests can only be sent to a specific instance if
     * [manual scaling is used in App Engine
     * Standard](https://cloud.google.com/appengine/docs/python/an-overview-of-app-engine?#scaling_types_and_instance_classes).
     * App Engine Flex does not support instances. For more information, see
     * [App Engine Standard request
     * routing](https://cloud.google.com/appengine/docs/standard/python/how-requests-are-routed)
     * and [App Engine Flex request
     * routing](https://cloud.google.com/appengine/docs/flexible/python/how-requests-are-routed).
     *
     * Generated from protobuf field <code>string instance = 3;</code>
     */
    private $instance = '';
    /**
     * Output only. The host that the job is sent to.
     * For more information about how App Engine requests are routed, see
     * [here](https://cloud.google.com/appengine/docs/standard/python/how-requests-are-routed).
     * The host is constructed as:
     * * `host = [application_domain_name]`</br>
     *   `| [service] + '.' + [application_domain_name]`</br>
     *   `| [version] + '.' + [application_domain_name]`</br>
     *   `| [version_dot_service]+ '.' + [application_domain_name]`</br>
     *   `| [instance] + '.' + [application_domain_name]`</br>
     *   `| [instance_dot_service] + '.' + [application_domain_name]`</br>
     *   `| [instance_dot_version] + '.' + [application_domain_name]`</br>
     *   `| [instance_dot_version_dot_service] + '.' + [application_domain_name]`
     * * `application_domain_name` = The domain name of the app, for
     *   example <app-id>.appspot.com, which is associated with the
     *   job's project ID.
     * * `service =` [service][google.cloud.scheduler.v1.AppEngineRouting.service]
     * * `version =` [version][google.cloud.scheduler.v1.AppEngineRouting.version]
     * * `version_dot_service =`
     *   [version][google.cloud.scheduler.v1.AppEngineRouting.version] `+ '.' +`
     *   [service][google.cloud.scheduler.v1.AppEngineRouting.service]
     * * `instance =`
     * [instance][google.cloud.scheduler.v1.AppEngineRouting.instance]
     * * `instance_dot_service =`
     *   [instance][google.cloud.scheduler.v1.AppEngineRouting.instance] `+ '.' +`
     *   [service][google.cloud.scheduler.v1.AppEngineRouting.service]
     * * `instance_dot_version =`
     *   [instance][google.cloud.scheduler.v1.AppEngineRouting.instance] `+ '.' +`
     *   [version][google.cloud.scheduler.v1.AppEngineRouting.version]
     * * `instance_dot_version_dot_service =`
     *   [instance][google.cloud.scheduler.v1.AppEngineRouting.instance] `+ '.' +`
     *   [version][google.cloud.scheduler.v1.AppEngineRouting.version] `+ '.' +`
     *   [service][google.cloud.scheduler.v1.AppEngineRouting.service]
     * If [service][google.cloud.scheduler.v1.AppEngineRouting.service] is empty,
     * then the job will be sent to the service which is the default service when
     * the job is attempted.
     * If [version][google.cloud.scheduler.v1.AppEngineRouting.version] is empty,
     * then the job will be sent to the version which is the default version when
     * the job is attempted.
     * If [instance][google.cloud.scheduler.v1.AppEngineRouting.instance] is
     * empty, then the job will be sent to an instance which is available when the
     * job is attempted.
     * If [service][google.cloud.scheduler.v1.AppEngineRouting.service],
     * [version][google.cloud.scheduler.v1.AppEngineRouting.version], or
     * [instance][google.cloud.scheduler.v1.AppEngineRouting.instance] is invalid,
     * then the job will be sent to the default version of the default service
     * when the job is attempted.
     *
     * Generated from protobuf field <code>string host = 4;</code>
     */
    private $host = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service
     *           App service.
     *           By default, the job is sent to the service which is the default
     *           service when the job is attempted.
     *     @type string $version
     *           App version.
     *           By default, the job is sent to the version which is the default
     *           version when the job is attempted.
     *     @type string $instance
     *           App instance.
     *           By default, the job is sent to an instance which is available when
     *           the job is attempted.
     *           Requests can only be sent to a specific instance if
     *           [manual scaling is used in App Engine
     *           Standard](https://cloud.google.com/appengine/docs/python/an-overview-of-app-engine?#scaling_types_and_instance_classes).
     *           App Engine Flex does not support instances. For more information, see
     *           [App Engine Standard request
     *           routing](https://cloud.google.com/appengine/docs/standard/python/how-requests-are-routed)
     *           and [App Engine Flex request
     *           routing](https://cloud.google.com/appengine/docs/flexible/python/how-requests-are-routed).
     *     @type string $host
     *           Output only. The host that the job is sent to.
     *           For more information about how App Engine requests are routed, see
     *           [here](https://cloud.google.com/appengine/docs/standard/python/how-requests-are-routed).
     *           The host is constructed as:
     *           * `host = [application_domain_name]`</br>
     *             `| [service] + '.' + [application_domain_name]`</br>
     *             `| [version] + '.' + [application_domain_name]`</br>
     *             `| [version_dot_service]+ '.' + [application_domain_name]`</br>
     *             `| [instance] + '.' + [application_domain_name]`</br>
     *             `| [instance_dot_service] + '.' + [application_domain_name]`</br>
     *             `| [instance_dot_version] + '.' + [application_domain_name]`</br>
     *             `| [instance_dot_version_dot_service] + '.' + [application_domain_name]`
     *           * `application_domain_name` = The domain name of the app, for
     *             example <app-id>.appspot.com, which is associated with the
     *             job's project ID.
     *           * `service =` [service][google.cloud.scheduler.v1.AppEngineRouting.service]
     *           * `version =` [version][google.cloud.scheduler.v1.AppEngineRouting.version]
     *           * `version_dot_service =`
     *             [version][google.cloud.scheduler.v1.AppEngineRouting.version] `+ '.' +`
     *             [service][google.cloud.scheduler.v1.AppEngineRouting.service]
     *           * `instance =`
     *           [instance][google.cloud.scheduler.v1.AppEngineRouting.instance]
     *           * `instance_dot_service =`
     *             [instance][google.cloud.scheduler.v1.AppEngineRouting.instance] `+ '.' +`
     *             [service][google.cloud.scheduler.v1.AppEngineRouting.service]
     *           * `instance_dot_version =`
     *             [instance][google.cloud.scheduler.v1.AppEngineRouting.instance] `+ '.' +`
     *             [version][google.cloud.scheduler.v1.AppEngineRouting.version]
     *           * `instance_dot_version_dot_service =`
     *             [instance][google.cloud.scheduler.v1.AppEngineRouting.instance] `+ '.' +`
     *             [version][google.cloud.scheduler.v1.AppEngineRouting.version] `+ '.' +`
     *             [service][google.cloud.scheduler.v1.AppEngineRouting.service]
     *           If [service][google.cloud.scheduler.v1.AppEngineRouting.service] is empty,
     *           then the job will be sent to the service which is the default service when
     *           the job is attempted.
     *           If [version][google.cloud.scheduler.v1.AppEngineRouting.version] is empty,
     *           then the job will be sent to the version which is the default version when
     *           the job is attempted.
     *           If [instance][google.cloud.scheduler.v1.AppEngineRouting.instance] is
     *           empty, then the job will be sent to an instance which is available when the
     *           job is attempted.
     *           If [service][google.cloud.scheduler.v1.AppEngineRouting.service],
     *           [version][google.cloud.scheduler.v1.AppEngineRouting.version], or
     *           [instance][google.cloud.scheduler.v1.AppEngineRouting.instance] is invalid,
     *           then the job will be sent to the default version of the default service
     *           when the job is attempted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Scheduler\V1\Target::initOnce();
        parent::__construct($data);
    }

    /**
     * App service.
     * By default, the job is sent to the service which is the default
     * service when the job is attempted.
     *
     * Generated from protobuf field <code>string service = 1;</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * App service.
     * By default, the job is sent to the service which is the default
     * service when the job is attempted.
     *
     * Generated from protobuf field <code>string service = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * App version.
     * By default, the job is sent to the version which is the default
     * version when the job is attempted.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * App version.
     * By default, the job is sent to the version which is the default
     * version when the job is attempted.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * App instance.
     * By default, the job is sent to an instance which is available when
     * the job is attempted.
     * Requests can only be sent to a specific instance if
     * [manual scaling is used in App Engine
     * Standard](https://cloud.google.com/appengine/docs/python/an-overview-of-app-engine?#scaling_types_and_instance_classes).
     * App Engine Flex does not support instances. For more information, see
     * [App Engine Standard request
     * routing](https://cloud.google.com/appengine/docs/standard/python/how-requests-are-routed)
     * and [App Engine Flex request
     * routing](https://cloud.google.com/appengine/docs/flexible/python/how-requests-are-routed).
     *
     * Generated from protobuf field <code>string instance = 3;</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * App instance.
     * By default, the job is sent to an instance which is available when
     * the job is attempted.
     * Requests can only be sent to a specific instance if
     * [manual scaling is used in App Engine
     * Standard](https://cloud.google.com/appengine/docs/python/an-overview-of-app-engine?#scaling_types_and_instance_classes).
     * App Engine Flex does not support instances. For more information, see
     * [App Engine Standard request
     * routing](https://cloud.google.com/appengine/docs/standard/python/how-requests-are-routed)
     * and [App Engine Flex request
     * routing](https://cloud.google.com/appengine/docs/flexible/python/how-requests-are-routed).
     *
     * Generated from protobuf field <code>string instance = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * Output only. The host that the job is sent to.
     * For more information about how App Engine requests are routed, see
     * [here](https://cloud.google.com/appengine/docs/standard/python/how-requests-are-routed).
     * The host is constructed as:
     * * `host = [application_domain_name]`</br>
     *   `| [service] + '.' + [application_domain_name]`</br>
     *   `| [version] + '.' + [application_domain_name]`</br>
     *   `| [version_dot_service]+ '.' + [application_domain_name]`</br>
     *   `| [instance] + '.' + [application_domain_name]`</br>
     *   `| [instance_dot_service] + '.' + [application_domain_name]`</br>
     *   `| [instance_dot_version] + '.' + [application_domain_name]`</br>
     *   `| [instance_dot_version_dot_service] + '.' + [application_domain_name]`
     * * `application_domain_name` = The domain name of the app, for
     *   example <app-id>.appspot.com, which is associated with the
     *   job's project ID.
     * * `service =` [service][google.cloud.scheduler.v1.AppEngineRouting.service]
     * * `version =` [version][google.cloud.scheduler.v1.AppEngineRouting.version]
     * * `version_dot_service =`
     *   [version][google.cloud.scheduler.v1.AppEngineRouting.version] `+ '.' +`
     *   [service][google.cloud.scheduler.v1.AppEngineRouting.service]
     * * `instance =`
     * [instance][google.cloud.scheduler.v1.AppEngineRouting.instance]
     * * `instance_dot_service =`
     *   [instance][google.cloud.scheduler.v1.AppEngineRouting.instance] `+ '.' +`
     *   [service][google.cloud.scheduler.v1.AppEngineRouting.service]
     * * `instance_dot_version =`
     *   [instance][google.cloud.scheduler.v1.AppEngineRouting.instance] `+ '.' +`
     *   [version][google.cloud.scheduler.v1.AppEngineRouting.version]
     * * `instance_dot_version_dot_service =`
     *   [instance][google.cloud.scheduler.v1.AppEngineRouting.instance] `+ '.' +`
     *   [version][google.cloud.scheduler.v1.AppEngineRouting.version] `+ '.' +`
     *   [service][google.cloud.scheduler.v1.AppEngineRouting.service]
     * If [service][google.cloud.scheduler.v1.AppEngineRouting.service] is empty,
     * then the job will be sent to the service which is the default service when
     * the job is attempted.
     * If [version][google.cloud.scheduler.v1.AppEngineRouting.version] is empty,
     * then the job will be sent to the version which is the default version when
     * the job is attempted.
     * If [instance][google.cloud.scheduler.v1.AppEngineRouting.instance] is
     * empty, then the job will be sent to an instance which is available when the
     * job is attempted.
     * If [service][google.cloud.scheduler.v1.AppEngineRouting.service],
     * [version][google.cloud.scheduler.v1.AppEngineRouting.version], or
     * [instance][google.cloud.scheduler.v1.AppEngineRouting.instance] is invalid,
     * then the job will be sent to the default version of the default service
     * when the job is attempted.
     *
     * Generated from protobuf field <code>string host = 4;</code>
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Output only. The host that the job is sent to.
     * For more information about how App Engine requests are routed, see
     * [here](https://cloud.google.com/appengine/docs/standard/python/how-requests-are-routed).
     * The host is constructed as:
     * * `host = [application_domain_name]`</br>
     *   `| [service] + '.' + [application_domain_name]`</br>
     *   `| [version] + '.' + [application_domain_name]`</br>
     *   `| [version_dot_service]+ '.' + [application_domain_name]`</br>
     *   `| [instance] + '.' + [application_domain_name]`</br>
     *   `| [instance_dot_service] + '.' + [application_domain_name]`</br>
     *   `| [instance_dot_version] + '.' + [application_domain_name]`</br>
     *   `| [instance_dot_version_dot_service] + '.' + [application_domain_name]`
     * * `application_domain_name` = The domain name of the app, for
     *   example <app-id>.appspot.com, which is associated with the
     *   job's project ID.
     * * `service =` [service][google.cloud.scheduler.v1.AppEngineRouting.service]
     * * `version =` [version][google.cloud.scheduler.v1.AppEngineRouting.version]
     * * `version_dot_service =`
     *   [version][google.cloud.scheduler.v1.AppEngineRouting.version] `+ '.' +`
     *   [service][google.cloud.scheduler.v1.AppEngineRouting.service]
     * * `instance =`
     * [instance][google.cloud.scheduler.v1.AppEngineRouting.instance]
     * * `instance_dot_service =`
     *   [instance][google.cloud.scheduler.v1.AppEngineRouting.instance] `+ '.' +`
     *   [service][google.cloud.scheduler.v1.AppEngineRouting.service]
     * * `instance_dot_version =`
     *   [instance][google.cloud.scheduler.v1.AppEngineRouting.instance] `+ '.' +`
     *   [version][google.cloud.scheduler.v1.AppEngineRouting.version]
     * * `instance_dot_version_dot_service =`
     *   [instance][google.cloud.scheduler.v1.AppEngineRouting.instance] `+ '.' +`
     *   [version][google.cloud.scheduler.v1.AppEngineRouting.version] `+ '.' +`
     *   [service][google.cloud.scheduler.v1.AppEngineRouting.service]
     * If [service][google.cloud.scheduler.v1.AppEngineRouting.service] is empty,
     * then the job will be sent to the service which is the default service when
     * the job is attempted.
     * If [version][google.cloud.scheduler.v1.AppEngineRouting.version] is empty,
     * then the job will be sent to the version which is the default version when
     * the job is attempted.
     * If [instance][google.cloud.scheduler.v1.AppEngineRouting.instance] is
     * empty, then the job will be sent to an instance which is available when the
     * job is attempted.
     * If [service][google.cloud.scheduler.v1.AppEngineRouting.service],
     * [version][google.cloud.scheduler.v1.AppEngineRouting.version], or
     * [instance][google.cloud.scheduler.v1.AppEngineRouting.instance] is invalid,
     * then the job will be sent to the default version of the default service
     * when the job is attempted.
     *
     * Generated from protobuf field <code>string host = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->host = $var;

        return $this;
    }

}

