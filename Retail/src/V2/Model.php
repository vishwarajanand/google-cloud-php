<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/model.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata that describes the training and serving parameters of a
 * [Model][google.cloud.retail.v2.Model]. A
 * [Model][google.cloud.retail.v2.Model] can be associated with a
 * [ServingConfig][google.cloud.retail.v2.ServingConfig] and then queried
 * through the Predict API.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.Model</code>
 */
class Model extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The fully qualified resource name of the model.
     * Format:
     * `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/models/{model_id}`
     * catalog_id has char limit of 50.
     * recommendation_model_id has char limit of 40.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Required. The display name of the model.
     * Should be human readable, used to display Recommendation Models in the
     * Retail Cloud Console Dashboard. UTF-8 encoded string with limit of 1024
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Optional. The training state that the model is in (e.g.
     * `TRAINING` or `PAUSED`).
     * Since part of the cost of running the service
     * is frequency of training - this can be used to determine when to train
     * model in order to control cost. If not specified: the default value for
     * `CreateModel` method is `TRAINING`. The default value for
     * `UpdateModel` method is to keep the state the same as before.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Model.TrainingState training_state = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $training_state = 0;
    /**
     * Output only. The serving state of the model: `ACTIVE`, `NOT_ACTIVE`.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Model.ServingState serving_state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $serving_state = 0;
    /**
     * Output only. Timestamp the Recommendation Model was created at.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Timestamp the Recommendation Model was last updated. E.g.
     * if a Recommendation Model was paused - this would be the time the pause was
     * initiated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Required. The type of model e.g. `home-page`.
     * Currently supported values: `recommended-for-you`, `others-you-may-like`,
     * `frequently-bought-together`, `page-optimization`, `similar-items`,
     * `buy-it-again`, `on-sale-items`, and `recently-viewed`(readonly value).
     * This field together with
     * [optimization_objective][google.cloud.retail.v2.Model.optimization_objective]
     * describe model metadata to use to control model training and serving.
     * See https://cloud.google.com/retail/docs/models
     * for more details on what the model metadata control and which combination
     * of parameters are valid. For invalid combinations of parameters (e.g. type
     * = `frequently-bought-together` and optimization_objective = `ctr`), you
     * receive an error 400 if you try to create/update a recommendation with
     * this set of knobs.
     *
     * Generated from protobuf field <code>string type = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $type = '';
    /**
     * Optional. The optimization objective e.g. `cvr`.
     * Currently supported
     * values: `ctr`, `cvr`, `revenue-per-order`.
     *  If not specified, we choose default based on model type.
     * Default depends on type of recommendation:
     * `recommended-for-you` => `ctr`
     * `others-you-may-like` => `ctr`
     * `frequently-bought-together` => `revenue_per_order`
     * This field together with
     * [optimization_objective][google.cloud.retail.v2.Model.type]
     * describe model metadata to use to control model training and serving.
     * See https://cloud.google.com/retail/docs/models
     * for more details on what the model metadata control and which combination
     * of parameters are valid. For invalid combinations of parameters (e.g. type
     * = `frequently-bought-together` and optimization_objective = `ctr`), you
     * receive an error 400 if you try to create/update a recommendation with
     * this set of knobs.
     *
     * Generated from protobuf field <code>string optimization_objective = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $optimization_objective = '';
    /**
     * Optional. The state of periodic tuning.
     * The period we use is 3 months - to do a
     * one-off tune earlier use the `TuneModel` method. Default value
     * is `PERIODIC_TUNING_ENABLED`.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Model.PeriodicTuningState periodic_tuning_state = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $periodic_tuning_state = 0;
    /**
     * Output only. The timestamp when the latest successful tune finished.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_tune_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $last_tune_time = null;
    /**
     * Output only. The tune operation associated with the model.
     * Can be used to determine if there is an ongoing tune for this
     * recommendation. Empty field implies no tune is goig on.
     *
     * Generated from protobuf field <code>string tuning_operation = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $tuning_operation = '';
    /**
     * Output only. The state of data requirements for this model: `DATA_OK` and
     * `DATA_ERROR`.
     * Recommendation model cannot be trained if the data is in
     * `DATA_ERROR` state. Recommendation model can have `DATA_ERROR` state even
     * if serving state is `ACTIVE`: models were trained successfully before, but
     * cannot be refreshed because model no longer has sufficient
     * data for training.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Model.DataState data_state = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $data_state = 0;
    /**
     * Optional. If `RECOMMENDATIONS_FILTERING_ENABLED`, recommendation filtering
     * by attributes is enabled for the model.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.RecommendationsFilteringOption filtering_option = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filtering_option = 0;
    /**
     * Output only. The list of valid serving configs associated with the
     * PageOptimizationConfig.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.Model.ServingConfigList serving_config_lists = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $serving_config_lists;
    /**
     * Optional. Additional model features config.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Model.ModelFeaturesConfig model_features_config = 22 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $model_features_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The fully qualified resource name of the model.
     *           Format:
     *           `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/models/{model_id}`
     *           catalog_id has char limit of 50.
     *           recommendation_model_id has char limit of 40.
     *     @type string $display_name
     *           Required. The display name of the model.
     *           Should be human readable, used to display Recommendation Models in the
     *           Retail Cloud Console Dashboard. UTF-8 encoded string with limit of 1024
     *           characters.
     *     @type int $training_state
     *           Optional. The training state that the model is in (e.g.
     *           `TRAINING` or `PAUSED`).
     *           Since part of the cost of running the service
     *           is frequency of training - this can be used to determine when to train
     *           model in order to control cost. If not specified: the default value for
     *           `CreateModel` method is `TRAINING`. The default value for
     *           `UpdateModel` method is to keep the state the same as before.
     *     @type int $serving_state
     *           Output only. The serving state of the model: `ACTIVE`, `NOT_ACTIVE`.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp the Recommendation Model was created at.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Timestamp the Recommendation Model was last updated. E.g.
     *           if a Recommendation Model was paused - this would be the time the pause was
     *           initiated.
     *     @type string $type
     *           Required. The type of model e.g. `home-page`.
     *           Currently supported values: `recommended-for-you`, `others-you-may-like`,
     *           `frequently-bought-together`, `page-optimization`, `similar-items`,
     *           `buy-it-again`, `on-sale-items`, and `recently-viewed`(readonly value).
     *           This field together with
     *           [optimization_objective][google.cloud.retail.v2.Model.optimization_objective]
     *           describe model metadata to use to control model training and serving.
     *           See https://cloud.google.com/retail/docs/models
     *           for more details on what the model metadata control and which combination
     *           of parameters are valid. For invalid combinations of parameters (e.g. type
     *           = `frequently-bought-together` and optimization_objective = `ctr`), you
     *           receive an error 400 if you try to create/update a recommendation with
     *           this set of knobs.
     *     @type string $optimization_objective
     *           Optional. The optimization objective e.g. `cvr`.
     *           Currently supported
     *           values: `ctr`, `cvr`, `revenue-per-order`.
     *            If not specified, we choose default based on model type.
     *           Default depends on type of recommendation:
     *           `recommended-for-you` => `ctr`
     *           `others-you-may-like` => `ctr`
     *           `frequently-bought-together` => `revenue_per_order`
     *           This field together with
     *           [optimization_objective][google.cloud.retail.v2.Model.type]
     *           describe model metadata to use to control model training and serving.
     *           See https://cloud.google.com/retail/docs/models
     *           for more details on what the model metadata control and which combination
     *           of parameters are valid. For invalid combinations of parameters (e.g. type
     *           = `frequently-bought-together` and optimization_objective = `ctr`), you
     *           receive an error 400 if you try to create/update a recommendation with
     *           this set of knobs.
     *     @type int $periodic_tuning_state
     *           Optional. The state of periodic tuning.
     *           The period we use is 3 months - to do a
     *           one-off tune earlier use the `TuneModel` method. Default value
     *           is `PERIODIC_TUNING_ENABLED`.
     *     @type \Google\Protobuf\Timestamp $last_tune_time
     *           Output only. The timestamp when the latest successful tune finished.
     *     @type string $tuning_operation
     *           Output only. The tune operation associated with the model.
     *           Can be used to determine if there is an ongoing tune for this
     *           recommendation. Empty field implies no tune is goig on.
     *     @type int $data_state
     *           Output only. The state of data requirements for this model: `DATA_OK` and
     *           `DATA_ERROR`.
     *           Recommendation model cannot be trained if the data is in
     *           `DATA_ERROR` state. Recommendation model can have `DATA_ERROR` state even
     *           if serving state is `ACTIVE`: models were trained successfully before, but
     *           cannot be refreshed because model no longer has sufficient
     *           data for training.
     *     @type int $filtering_option
     *           Optional. If `RECOMMENDATIONS_FILTERING_ENABLED`, recommendation filtering
     *           by attributes is enabled for the model.
     *     @type array<\Google\Cloud\Retail\V2\Model\ServingConfigList>|\Google\Protobuf\Internal\RepeatedField $serving_config_lists
     *           Output only. The list of valid serving configs associated with the
     *           PageOptimizationConfig.
     *     @type \Google\Cloud\Retail\V2\Model\ModelFeaturesConfig $model_features_config
     *           Optional. Additional model features config.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Model::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The fully qualified resource name of the model.
     * Format:
     * `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/models/{model_id}`
     * catalog_id has char limit of 50.
     * recommendation_model_id has char limit of 40.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The fully qualified resource name of the model.
     * Format:
     * `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/models/{model_id}`
     * catalog_id has char limit of 50.
     * recommendation_model_id has char limit of 40.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The display name of the model.
     * Should be human readable, used to display Recommendation Models in the
     * Retail Cloud Console Dashboard. UTF-8 encoded string with limit of 1024
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The display name of the model.
     * Should be human readable, used to display Recommendation Models in the
     * Retail Cloud Console Dashboard. UTF-8 encoded string with limit of 1024
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional. The training state that the model is in (e.g.
     * `TRAINING` or `PAUSED`).
     * Since part of the cost of running the service
     * is frequency of training - this can be used to determine when to train
     * model in order to control cost. If not specified: the default value for
     * `CreateModel` method is `TRAINING`. The default value for
     * `UpdateModel` method is to keep the state the same as before.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Model.TrainingState training_state = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getTrainingState()
    {
        return $this->training_state;
    }

    /**
     * Optional. The training state that the model is in (e.g.
     * `TRAINING` or `PAUSED`).
     * Since part of the cost of running the service
     * is frequency of training - this can be used to determine when to train
     * model in order to control cost. If not specified: the default value for
     * `CreateModel` method is `TRAINING`. The default value for
     * `UpdateModel` method is to keep the state the same as before.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Model.TrainingState training_state = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setTrainingState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Retail\V2\Model\TrainingState::class);
        $this->training_state = $var;

        return $this;
    }

    /**
     * Output only. The serving state of the model: `ACTIVE`, `NOT_ACTIVE`.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Model.ServingState serving_state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getServingState()
    {
        return $this->serving_state;
    }

    /**
     * Output only. The serving state of the model: `ACTIVE`, `NOT_ACTIVE`.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Model.ServingState serving_state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setServingState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Retail\V2\Model\ServingState::class);
        $this->serving_state = $var;

        return $this;
    }

    /**
     * Output only. Timestamp the Recommendation Model was created at.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Timestamp the Recommendation Model was created at.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Timestamp the Recommendation Model was last updated. E.g.
     * if a Recommendation Model was paused - this would be the time the pause was
     * initiated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Timestamp the Recommendation Model was last updated. E.g.
     * if a Recommendation Model was paused - this would be the time the pause was
     * initiated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Required. The type of model e.g. `home-page`.
     * Currently supported values: `recommended-for-you`, `others-you-may-like`,
     * `frequently-bought-together`, `page-optimization`, `similar-items`,
     * `buy-it-again`, `on-sale-items`, and `recently-viewed`(readonly value).
     * This field together with
     * [optimization_objective][google.cloud.retail.v2.Model.optimization_objective]
     * describe model metadata to use to control model training and serving.
     * See https://cloud.google.com/retail/docs/models
     * for more details on what the model metadata control and which combination
     * of parameters are valid. For invalid combinations of parameters (e.g. type
     * = `frequently-bought-together` and optimization_objective = `ctr`), you
     * receive an error 400 if you try to create/update a recommendation with
     * this set of knobs.
     *
     * Generated from protobuf field <code>string type = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. The type of model e.g. `home-page`.
     * Currently supported values: `recommended-for-you`, `others-you-may-like`,
     * `frequently-bought-together`, `page-optimization`, `similar-items`,
     * `buy-it-again`, `on-sale-items`, and `recently-viewed`(readonly value).
     * This field together with
     * [optimization_objective][google.cloud.retail.v2.Model.optimization_objective]
     * describe model metadata to use to control model training and serving.
     * See https://cloud.google.com/retail/docs/models
     * for more details on what the model metadata control and which combination
     * of parameters are valid. For invalid combinations of parameters (e.g. type
     * = `frequently-bought-together` and optimization_objective = `ctr`), you
     * receive an error 400 if you try to create/update a recommendation with
     * this set of knobs.
     *
     * Generated from protobuf field <code>string type = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Optional. The optimization objective e.g. `cvr`.
     * Currently supported
     * values: `ctr`, `cvr`, `revenue-per-order`.
     *  If not specified, we choose default based on model type.
     * Default depends on type of recommendation:
     * `recommended-for-you` => `ctr`
     * `others-you-may-like` => `ctr`
     * `frequently-bought-together` => `revenue_per_order`
     * This field together with
     * [optimization_objective][google.cloud.retail.v2.Model.type]
     * describe model metadata to use to control model training and serving.
     * See https://cloud.google.com/retail/docs/models
     * for more details on what the model metadata control and which combination
     * of parameters are valid. For invalid combinations of parameters (e.g. type
     * = `frequently-bought-together` and optimization_objective = `ctr`), you
     * receive an error 400 if you try to create/update a recommendation with
     * this set of knobs.
     *
     * Generated from protobuf field <code>string optimization_objective = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOptimizationObjective()
    {
        return $this->optimization_objective;
    }

    /**
     * Optional. The optimization objective e.g. `cvr`.
     * Currently supported
     * values: `ctr`, `cvr`, `revenue-per-order`.
     *  If not specified, we choose default based on model type.
     * Default depends on type of recommendation:
     * `recommended-for-you` => `ctr`
     * `others-you-may-like` => `ctr`
     * `frequently-bought-together` => `revenue_per_order`
     * This field together with
     * [optimization_objective][google.cloud.retail.v2.Model.type]
     * describe model metadata to use to control model training and serving.
     * See https://cloud.google.com/retail/docs/models
     * for more details on what the model metadata control and which combination
     * of parameters are valid. For invalid combinations of parameters (e.g. type
     * = `frequently-bought-together` and optimization_objective = `ctr`), you
     * receive an error 400 if you try to create/update a recommendation with
     * this set of knobs.
     *
     * Generated from protobuf field <code>string optimization_objective = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOptimizationObjective($var)
    {
        GPBUtil::checkString($var, True);
        $this->optimization_objective = $var;

        return $this;
    }

    /**
     * Optional. The state of periodic tuning.
     * The period we use is 3 months - to do a
     * one-off tune earlier use the `TuneModel` method. Default value
     * is `PERIODIC_TUNING_ENABLED`.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Model.PeriodicTuningState periodic_tuning_state = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPeriodicTuningState()
    {
        return $this->periodic_tuning_state;
    }

    /**
     * Optional. The state of periodic tuning.
     * The period we use is 3 months - to do a
     * one-off tune earlier use the `TuneModel` method. Default value
     * is `PERIODIC_TUNING_ENABLED`.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Model.PeriodicTuningState periodic_tuning_state = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPeriodicTuningState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Retail\V2\Model\PeriodicTuningState::class);
        $this->periodic_tuning_state = $var;

        return $this;
    }

    /**
     * Output only. The timestamp when the latest successful tune finished.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_tune_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastTuneTime()
    {
        return $this->last_tune_time;
    }

    public function hasLastTuneTime()
    {
        return isset($this->last_tune_time);
    }

    public function clearLastTuneTime()
    {
        unset($this->last_tune_time);
    }

    /**
     * Output only. The timestamp when the latest successful tune finished.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_tune_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastTuneTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_tune_time = $var;

        return $this;
    }

    /**
     * Output only. The tune operation associated with the model.
     * Can be used to determine if there is an ongoing tune for this
     * recommendation. Empty field implies no tune is goig on.
     *
     * Generated from protobuf field <code>string tuning_operation = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getTuningOperation()
    {
        return $this->tuning_operation;
    }

    /**
     * Output only. The tune operation associated with the model.
     * Can be used to determine if there is an ongoing tune for this
     * recommendation. Empty field implies no tune is goig on.
     *
     * Generated from protobuf field <code>string tuning_operation = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setTuningOperation($var)
    {
        GPBUtil::checkString($var, True);
        $this->tuning_operation = $var;

        return $this;
    }

    /**
     * Output only. The state of data requirements for this model: `DATA_OK` and
     * `DATA_ERROR`.
     * Recommendation model cannot be trained if the data is in
     * `DATA_ERROR` state. Recommendation model can have `DATA_ERROR` state even
     * if serving state is `ACTIVE`: models were trained successfully before, but
     * cannot be refreshed because model no longer has sufficient
     * data for training.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Model.DataState data_state = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getDataState()
    {
        return $this->data_state;
    }

    /**
     * Output only. The state of data requirements for this model: `DATA_OK` and
     * `DATA_ERROR`.
     * Recommendation model cannot be trained if the data is in
     * `DATA_ERROR` state. Recommendation model can have `DATA_ERROR` state even
     * if serving state is `ACTIVE`: models were trained successfully before, but
     * cannot be refreshed because model no longer has sufficient
     * data for training.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Model.DataState data_state = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setDataState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Retail\V2\Model\DataState::class);
        $this->data_state = $var;

        return $this;
    }

    /**
     * Optional. If `RECOMMENDATIONS_FILTERING_ENABLED`, recommendation filtering
     * by attributes is enabled for the model.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.RecommendationsFilteringOption filtering_option = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getFilteringOption()
    {
        return $this->filtering_option;
    }

    /**
     * Optional. If `RECOMMENDATIONS_FILTERING_ENABLED`, recommendation filtering
     * by attributes is enabled for the model.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.RecommendationsFilteringOption filtering_option = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setFilteringOption($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Retail\V2\RecommendationsFilteringOption::class);
        $this->filtering_option = $var;

        return $this;
    }

    /**
     * Output only. The list of valid serving configs associated with the
     * PageOptimizationConfig.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.Model.ServingConfigList serving_config_lists = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServingConfigLists()
    {
        return $this->serving_config_lists;
    }

    /**
     * Output only. The list of valid serving configs associated with the
     * PageOptimizationConfig.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.Model.ServingConfigList serving_config_lists = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Retail\V2\Model\ServingConfigList>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServingConfigLists($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Retail\V2\Model\ServingConfigList::class);
        $this->serving_config_lists = $arr;

        return $this;
    }

    /**
     * Optional. Additional model features config.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Model.ModelFeaturesConfig model_features_config = 22 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Retail\V2\Model\ModelFeaturesConfig|null
     */
    public function getModelFeaturesConfig()
    {
        return $this->model_features_config;
    }

    public function hasModelFeaturesConfig()
    {
        return isset($this->model_features_config);
    }

    public function clearModelFeaturesConfig()
    {
        unset($this->model_features_config);
    }

    /**
     * Optional. Additional model features config.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Model.ModelFeaturesConfig model_features_config = 22 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Retail\V2\Model\ModelFeaturesConfig $var
     * @return $this
     */
    public function setModelFeaturesConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\Model\ModelFeaturesConfig::class);
        $this->model_features_config = $var;

        return $this;
    }

}

