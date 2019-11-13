<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/operations.proto

namespace GPBMetadata\Google\Cloud\Automl\V1Beta1;

class Operations
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Io::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Model::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\ModelEvaluation::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae6140a2c676f6f676c652f636c6f75642f6175746f6d6c2f7631626574" .
            "61312f6f7065726174696f6e732e70726f746f121b676f6f676c652e636c" .
            "6f75642e6175746f6d6c2e763162657461311a24676f6f676c652f636c6f" .
            "75642f6175746f6d6c2f763162657461312f696f2e70726f746f1a27676f" .
            "6f676c652f636c6f75642f6175746f6d6c2f763162657461312f6d6f6465" .
            "6c2e70726f746f1a32676f6f676c652f636c6f75642f6175746f6d6c2f76" .
            "3162657461312f6d6f64656c5f6576616c756174696f6e2e70726f746f1a" .
            "1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f1a1f" .
            "676f6f676c652f70726f746f6275662f74696d657374616d702e70726f74" .
            "6f1a17676f6f676c652f7270632f7374617475732e70726f746f228b080a" .
            "114f7065726174696f6e4d65746164617461124e0a0e64656c6574655f64" .
            "657461696c7318082001280b32342e676f6f676c652e636c6f75642e6175" .
            "746f6d6c2e763162657461312e44656c6574654f7065726174696f6e4d65" .
            "746164617461480012590a146465706c6f795f6d6f64656c5f6465746169" .
            "6c7318182001280b32392e676f6f676c652e636c6f75642e6175746f6d6c" .
            "2e763162657461312e4465706c6f794d6f64656c4f7065726174696f6e4d" .
            "657461646174614800125d0a16756e6465706c6f795f6d6f64656c5f6465" .
            "7461696c7318192001280b323b2e676f6f676c652e636c6f75642e617574" .
            "6f6d6c2e763162657461312e556e6465706c6f794d6f64656c4f70657261" .
            "74696f6e4d65746164617461480012590a146372656174655f6d6f64656c" .
            "5f64657461696c73180a2001280b32392e676f6f676c652e636c6f75642e" .
            "6175746f6d6c2e763162657461312e4372656174654d6f64656c4f706572" .
            "6174696f6e4d65746164617461480012570a13696d706f72745f64617461" .
            "5f64657461696c73180f2001280b32382e676f6f676c652e636c6f75642e" .
            "6175746f6d6c2e763162657461312e496d706f7274446174614f70657261" .
            "74696f6e4d657461646174614800125b0a1562617463685f707265646963" .
            "745f64657461696c7318102001280b323a2e676f6f676c652e636c6f7564" .
            "2e6175746f6d6c2e763162657461312e4261746368507265646963744f70" .
            "65726174696f6e4d65746164617461480012570a136578706f72745f6461" .
            "74615f64657461696c7318152001280b32382e676f6f676c652e636c6f75" .
            "642e6175746f6d6c2e763162657461312e4578706f7274446174614f7065" .
            "726174696f6e4d65746164617461480012590a146578706f72745f6d6f64" .
            "656c5f64657461696c7318162001280b32392e676f6f676c652e636c6f75" .
            "642e6175746f6d6c2e763162657461312e4578706f72744d6f64656c4f70" .
            "65726174696f6e4d65746164617461480012720a216578706f72745f6576" .
            "616c75617465645f6578616d706c65735f64657461696c73181a2001280b" .
            "32452e676f6f676c652e636c6f75642e6175746f6d6c2e76316265746131" .
            "2e4578706f72744576616c75617465644578616d706c65734f7065726174" .
            "696f6e4d65746164617461480012180a1070726f67726573735f70657263" .
            "656e74180d20012805122c0a107061727469616c5f6661696c7572657318" .
            "022003280b32122e676f6f676c652e7270632e537461747573122f0a0b63" .
            "72656174655f74696d6518032001280b321a2e676f6f676c652e70726f74" .
            "6f6275662e54696d657374616d70122f0a0b7570646174655f74696d6518" .
            "042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374" .
            "616d7042090a0764657461696c7322190a1744656c6574654f7065726174" .
            "696f6e4d65746164617461221e0a1c4465706c6f794d6f64656c4f706572" .
            "6174696f6e4d6574616461746122200a1e556e6465706c6f794d6f64656c" .
            "4f7065726174696f6e4d65746164617461221e0a1c4372656174654d6f64" .
            "656c4f7065726174696f6e4d65746164617461221d0a1b496d706f727444" .
            "6174614f7065726174696f6e4d6574616461746122ef010a1b4578706f72" .
            "74446174614f7065726174696f6e4d6574616461746112620a0b6f757470" .
            "75745f696e666f18012001280b324d2e676f6f676c652e636c6f75642e61" .
            "75746f6d6c2e763162657461312e4578706f7274446174614f7065726174" .
            "696f6e4d657461646174612e4578706f7274446174614f7574707574496e" .
            "666f1a6c0a144578706f7274446174614f7574707574496e666f121e0a14" .
            "6763735f6f75747075745f6469726563746f727918012001280948001221" .
            "0a1762696771756572795f6f75747075745f646174617365741802200128" .
            "09480042110a0f6f75747075745f6c6f636174696f6e22c3020a1d426174" .
            "6368507265646963744f7065726174696f6e4d65746164617461124a0a0c" .
            "696e7075745f636f6e66696718012001280b32342e676f6f676c652e636c" .
            "6f75642e6175746f6d6c2e763162657461312e4261746368507265646963" .
            "74496e707574436f6e66696712660a0b6f75747075745f696e666f180220" .
            "01280b32512e676f6f676c652e636c6f75642e6175746f6d6c2e76316265" .
            "7461312e4261746368507265646963744f7065726174696f6e4d65746164" .
            "6174612e4261746368507265646963744f7574707574496e666f1a6e0a16" .
            "4261746368507265646963744f7574707574496e666f121e0a146763735f" .
            "6f75747075745f6469726563746f7279180120012809480012210a176269" .
            "6771756572795f6f75747075745f64617461736574180220012809480042" .
            "110a0f6f75747075745f6c6f636174696f6e22bb010a1c4578706f72744d" .
            "6f64656c4f7065726174696f6e4d6574616461746112640a0b6f75747075" .
            "745f696e666f18022001280b324f2e676f6f676c652e636c6f75642e6175" .
            "746f6d6c2e763162657461312e4578706f72744d6f64656c4f7065726174" .
            "696f6e4d657461646174612e4578706f72744d6f64656c4f757470757449" .
            "6e666f1a350a154578706f72744d6f64656c4f7574707574496e666f121c" .
            "0a146763735f6f75747075745f6469726563746f727918012001280922ee" .
            "010a284578706f72744576616c75617465644578616d706c65734f706572" .
            "6174696f6e4d65746164617461127c0a0b6f75747075745f696e666f1802" .
            "2001280b32672e676f6f676c652e636c6f75642e6175746f6d6c2e763162" .
            "657461312e4578706f72744576616c75617465644578616d706c65734f70" .
            "65726174696f6e4d657461646174612e4578706f72744576616c75617465" .
            "644578616d706c65734f7574707574496e666f1a440a214578706f727445" .
            "76616c75617465644578616d706c65734f7574707574496e666f121f0a17" .
            "62696771756572795f6f75747075745f6461746173657418022001280942" .
            "a5010a1f636f6d2e676f6f676c652e636c6f75642e6175746f6d6c2e7631" .
            "626574613150015a41676f6f676c652e676f6c616e672e6f72672f67656e" .
            "70726f746f2f676f6f676c65617069732f636c6f75642f6175746f6d6c2f" .
            "763162657461313b6175746f6d6cca021b476f6f676c655c436c6f75645c" .
            "4175746f4d6c5c56316265746131ea021e476f6f676c653a3a436c6f7564" .
            "3a3a4175746f4d4c3a3a56316265746131620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

