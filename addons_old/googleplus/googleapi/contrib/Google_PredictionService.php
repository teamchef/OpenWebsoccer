<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */


/**
 * The "hostedmodels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $predictionService = new Google_PredictionService(...);
 *   $hostedmodels = $predictionService->hostedmodels;
 *  </code>
 */
class Google_HostedmodelsServiceResource extends Google_ServiceResource
{

    /**
     * Submit input and request an output against a hosted model. (hostedmodels.predict)
     *
     * @param string $project The project associated with the model.
     * @param string $hostedModelName The name of a hosted model.
     * @param Google_Input $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Output
     * @throws Google_Exception
     */
    public function predict($project, $hostedModelName, Google_Input $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'hostedModelName' => $hostedModelName, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('predict', [$params]);
        if ($this->useObjects()) {
            return new Google_Output($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "trainedmodels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $predictionService = new Google_PredictionService(...);
 *   $trainedmodels = $predictionService->trainedmodels;
 *  </code>
 */
class Google_TrainedmodelsServiceResource extends Google_ServiceResource
{

    /**
     * Get analysis of the model and the data the model was trained on. (trainedmodels.analyze)
     *
     * @param string $project The project associated with the model.
     * @param string $id The unique name for the predictive model.
     * @param array $optParams Optional parameters.
     * @return Google_Analyze
     * @throws Google_Exception
     */
    public function analyze($project, $id, $optParams = [])
    {
        $params = ['project' => $project, 'id' => $id];
        $params = array_merge($params, $optParams);
        $data = $this->__call('analyze', [$params]);
        if ($this->useObjects()) {
            return new Google_Analyze($data);
        } else {
            return $data;
        }
    }

    /**
     * Delete a trained model. (trainedmodels.delete)
     *
     * @param string $project The project associated with the model.
     * @param string $id The unique name for the predictive model.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($project, $id, $optParams = [])
    {
        $params = ['project' => $project, 'id' => $id];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Check training status of your model. (trainedmodels.get)
     *
     * @param string $project The project associated with the model.
     * @param string $id The unique name for the predictive model.
     * @param array $optParams Optional parameters.
     * @return Google_Insert2
     * @throws Google_Exception
     */
    public function get($project, $id, $optParams = [])
    {
        $params = ['project' => $project, 'id' => $id];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Insert2($data);
        } else {
            return $data;
        }
    }

    /**
     * Train a Prediction API model. (trainedmodels.insert)
     *
     * @param string $project The project associated with the model.
     * @param Google_Insert $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Insert2
     * @throws Google_Exception
     */
    public function insert($project, Google_Insert $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Insert2($data);
        } else {
            return $data;
        }
    }

    /**
     * List available models. (trainedmodels.list)
     *
     * @param string $project The project associated with the model.
     * @param array $optParams Optional parameters.
     * @return Google_PredictionList
     * @throws Google_Exception
     * @opt_param string maxResults Maximum number of results to return.
     * @opt_param string pageToken Pagination token.
     */
    public function listTrainedmodels($project, $optParams = [])
    {
        $params = ['project' => $project];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_PredictionList($data);
        } else {
            return $data;
        }
    }

    /**
     * Submit model id and request a prediction. (trainedmodels.predict)
     *
     * @param string $project The project associated with the model.
     * @param string $id The unique name for the predictive model.
     * @param Google_Input $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Output
     * @throws Google_Exception
     */
    public function predict($project, $id, Google_Input $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'id' => $id, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('predict', [$params]);
        if ($this->useObjects()) {
            return new Google_Output($data);
        } else {
            return $data;
        }
    }

    /**
     * Add new data to a trained model. (trainedmodels.update)
     *
     * @param string $project The project associated with the model.
     * @param string $id The unique name for the predictive model.
     * @param Google_Update $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Insert2
     * @throws Google_Exception
     */
    public function update($project, $id, Google_Update $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'id' => $id, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Insert2($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Prediction (v1.6).
 *
 * <p>
 * Lets you access a cloud hosted machine learning service that makes it easy to build smart apps
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/prediction/docs/developer-guide" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_PredictionService extends Google_Service
{
    /**
     * @var Google_HostedmodelsServiceResource
     */
    public $hostedmodels;
    /**
     * @var Google_TrainedmodelsServiceResource
     */
    public $trainedmodels;

    /**
     * Constructs the internal representation of the Prediction service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'prediction/v1.6/projects/';
        $this->version = 'v1.6';
        $this->serviceName = 'prediction';

        $client->addService($this->serviceName, $this->version);
        $this->hostedmodels = new Google_HostedmodelsServiceResource($this, $this->serviceName, 'hostedmodels', json_decode('{"methods": {"predict": {"id": "prediction.hostedmodels.predict", "path": "{project}/hostedmodels/{hostedModelName}/predict", "httpMethod": "POST", "parameters": {"hostedModelName": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Input"}, "response": {"$ref": "Output"}, "scopes": ["https://www.googleapis.com/auth/prediction"]}}}', true));
        $this->trainedmodels = new Google_TrainedmodelsServiceResource($this, $this->serviceName, 'trainedmodels', json_decode('{"methods": {"analyze": {"id": "prediction.trainedmodels.analyze", "path": "{project}/trainedmodels/{id}/analyze", "httpMethod": "GET", "parameters": {"id": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Analyze"}, "scopes": ["https://www.googleapis.com/auth/prediction"]}, "delete": {"id": "prediction.trainedmodels.delete", "path": "{project}/trainedmodels/{id}", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/prediction"]}, "get": {"id": "prediction.trainedmodels.get", "path": "{project}/trainedmodels/{id}", "httpMethod": "GET", "parameters": {"id": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Insert2"}, "scopes": ["https://www.googleapis.com/auth/prediction"]}, "insert": {"id": "prediction.trainedmodels.insert", "path": "{project}/trainedmodels", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Insert"}, "response": {"$ref": "Insert2"}, "scopes": ["https://www.googleapis.com/auth/devstorage.full_control", "https://www.googleapis.com/auth/devstorage.read_only", "https://www.googleapis.com/auth/devstorage.read_write", "https://www.googleapis.com/auth/prediction"]}, "list": {"id": "prediction.trainedmodels.list", "path": "{project}/trainedmodels/list", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "List"}, "scopes": ["https://www.googleapis.com/auth/prediction"]}, "predict": {"id": "prediction.trainedmodels.predict", "path": "{project}/trainedmodels/{id}/predict", "httpMethod": "POST", "parameters": {"id": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Input"}, "response": {"$ref": "Output"}, "scopes": ["https://www.googleapis.com/auth/prediction"]}, "update": {"id": "prediction.trainedmodels.update", "path": "{project}/trainedmodels/{id}", "httpMethod": "PUT", "parameters": {"id": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Update"}, "response": {"$ref": "Insert2"}, "scopes": ["https://www.googleapis.com/auth/prediction"]}}}', true));

    }
}


/**
 * Class Google_Analyze
 */
class Google_Analyze extends Google_Model
{
    /**
     * @var string
     */
    protected $__dataDescriptionType = 'Google_AnalyzeDataDescription';
    /**
     * @var string
     */
    protected $__dataDescriptionDataType = '';
    /**
     * @var
     */
    public $dataDescription;
    /**
     * @var
     */
    public $errors;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__modelDescriptionType = 'Google_AnalyzeModelDescription';
    /**
     * @var string
     */
    protected $__modelDescriptionDataType = '';
    /**
     * @var
     */
    public $modelDescription;
    /**
     * @var
     */
    public $selfLink;

    /**
     * @param Google_AnalyzeDataDescription $dataDescription
     */
    public function setDataDescription(Google_AnalyzeDataDescription $dataDescription)
    {
        $this->dataDescription = $dataDescription;
    }

    /**
     * @return mixed
     */
    public function getDataDescription()
    {
        return $this->dataDescription;
    }

    /**
     * @param $errors
     * @throws Google_Exception
     */
    public function setErrors(/* array(Google_string) */
        $errors)
    {
        $this->assertIsArray($errors, 'Google_string', __METHOD__);
        $this->errors = $errors;
    }

    /**
     * @return mixed
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param Google_AnalyzeModelDescription $modelDescription
     */
    public function setModelDescription(Google_AnalyzeModelDescription $modelDescription)
    {
        $this->modelDescription = $modelDescription;
    }

    /**
     * @return mixed
     */
    public function getModelDescription()
    {
        return $this->modelDescription;
    }

    /**
     * @param $selfLink
     */
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }
}

/**
 * Class Google_AnalyzeDataDescription
 */
class Google_AnalyzeDataDescription extends Google_Model
{
    /**
     * @var string
     */
    protected $__featuresType = 'Google_AnalyzeDataDescriptionFeatures';
    /**
     * @var string
     */
    protected $__featuresDataType = 'array';
    /**
     * @var
     */
    public $features;
    /**
     * @var string
     */
    protected $__outputFeatureType = 'Google_AnalyzeDataDescriptionOutputFeature';
    /**
     * @var string
     */
    protected $__outputFeatureDataType = '';
    /**
     * @var
     */
    public $outputFeature;

    /**
     * @param $features
     * @throws Google_Exception
     */
    public function setFeatures(/* array(Google_AnalyzeDataDescriptionFeatures) */
        $features)
    {
        $this->assertIsArray($features, 'Google_AnalyzeDataDescriptionFeatures', __METHOD__);
        $this->features = $features;
    }

    /**
     * @return mixed
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * @param Google_AnalyzeDataDescriptionOutputFeature $outputFeature
     */
    public function setOutputFeature(Google_AnalyzeDataDescriptionOutputFeature $outputFeature)
    {
        $this->outputFeature = $outputFeature;
    }

    /**
     * @return mixed
     */
    public function getOutputFeature()
    {
        return $this->outputFeature;
    }
}

/**
 * Class Google_AnalyzeDataDescriptionFeatures
 */
class Google_AnalyzeDataDescriptionFeatures extends Google_Model
{
    /**
     * @var string
     */
    protected $__categoricalType = 'Google_AnalyzeDataDescriptionFeaturesCategorical';
    /**
     * @var string
     */
    protected $__categoricalDataType = '';
    /**
     * @var
     */
    public $categorical;
    /**
     * @var
     */
    public $index;
    /**
     * @var string
     */
    protected $__numericType = 'Google_AnalyzeDataDescriptionFeaturesNumeric';
    /**
     * @var string
     */
    protected $__numericDataType = '';
    /**
     * @var
     */
    public $numeric;
    /**
     * @var string
     */
    protected $__textType = 'Google_AnalyzeDataDescriptionFeaturesText';
    /**
     * @var string
     */
    protected $__textDataType = '';
    /**
     * @var
     */
    public $text;

    /**
     * @param Google_AnalyzeDataDescriptionFeaturesCategorical $categorical
     */
    public function setCategorical(Google_AnalyzeDataDescriptionFeaturesCategorical $categorical)
    {
        $this->categorical = $categorical;
    }

    /**
     * @return mixed
     */
    public function getCategorical()
    {
        return $this->categorical;
    }

    /**
     * @param $index
     */
    public function setIndex($index)
    {
        $this->index = $index;
    }

    /**
     * @return mixed
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param Google_AnalyzeDataDescriptionFeaturesNumeric $numeric
     */
    public function setNumeric(Google_AnalyzeDataDescriptionFeaturesNumeric $numeric)
    {
        $this->numeric = $numeric;
    }

    /**
     * @return mixed
     */
    public function getNumeric()
    {
        return $this->numeric;
    }

    /**
     * @param Google_AnalyzeDataDescriptionFeaturesText $text
     */
    public function setText(Google_AnalyzeDataDescriptionFeaturesText $text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }
}

/**
 * Class Google_AnalyzeDataDescriptionFeaturesCategorical
 */
class Google_AnalyzeDataDescriptionFeaturesCategorical extends Google_Model
{
    /**
     * @var
     */
    public $count;
    /**
     * @var string
     */
    protected $__valuesType = 'Google_AnalyzeDataDescriptionFeaturesCategoricalValues';
    /**
     * @var string
     */
    protected $__valuesDataType = 'array';
    /**
     * @var
     */
    public $values;

    /**
     * @param $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param $values
     * @throws Google_Exception
     */
    public function setValues(/* array(Google_AnalyzeDataDescriptionFeaturesCategoricalValues) */
        $values)
    {
        $this->assertIsArray($values, 'Google_AnalyzeDataDescriptionFeaturesCategoricalValues', __METHOD__);
        $this->values = $values;
    }

    /**
     * @return mixed
     */
    public function getValues()
    {
        return $this->values;
    }
}

/**
 * Class Google_AnalyzeDataDescriptionFeaturesCategoricalValues
 */
class Google_AnalyzeDataDescriptionFeaturesCategoricalValues extends Google_Model
{
    /**
     * @var
     */
    public $count;
    /**
     * @var
     */
    public $value;

    /**
     * @param $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}

/**
 * Class Google_AnalyzeDataDescriptionFeaturesNumeric
 */
class Google_AnalyzeDataDescriptionFeaturesNumeric extends Google_Model
{
    /**
     * @var
     */
    public $count;
    /**
     * @var
     */
    public $mean;
    /**
     * @var
     */
    public $variance;

    /**
     * @param $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param $mean
     */
    public function setMean($mean)
    {
        $this->mean = $mean;
    }

    /**
     * @return mixed
     */
    public function getMean()
    {
        return $this->mean;
    }

    /**
     * @param $variance
     */
    public function setVariance($variance)
    {
        $this->variance = $variance;
    }

    /**
     * @return mixed
     */
    public function getVariance()
    {
        return $this->variance;
    }
}

/**
 * Class Google_AnalyzeDataDescriptionFeaturesText
 */
class Google_AnalyzeDataDescriptionFeaturesText extends Google_Model
{
    /**
     * @var
     */
    public $count;

    /**
     * @param $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }
}

/**
 * Class Google_AnalyzeDataDescriptionOutputFeature
 */
class Google_AnalyzeDataDescriptionOutputFeature extends Google_Model
{
    /**
     * @var string
     */
    protected $__numericType = 'Google_AnalyzeDataDescriptionOutputFeatureNumeric';
    /**
     * @var string
     */
    protected $__numericDataType = '';
    /**
     * @var
     */
    public $numeric;
    /**
     * @var string
     */
    protected $__textType = 'Google_AnalyzeDataDescriptionOutputFeatureText';
    /**
     * @var string
     */
    protected $__textDataType = 'array';
    /**
     * @var
     */
    public $text;

    /**
     * @param Google_AnalyzeDataDescriptionOutputFeatureNumeric $numeric
     */
    public function setNumeric(Google_AnalyzeDataDescriptionOutputFeatureNumeric $numeric)
    {
        $this->numeric = $numeric;
    }

    /**
     * @return mixed
     */
    public function getNumeric()
    {
        return $this->numeric;
    }

    /**
     * @param $text
     * @throws Google_Exception
     */
    public function setText(/* array(Google_AnalyzeDataDescriptionOutputFeatureText) */
        $text)
    {
        $this->assertIsArray($text, 'Google_AnalyzeDataDescriptionOutputFeatureText', __METHOD__);
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }
}

/**
 * Class Google_AnalyzeDataDescriptionOutputFeatureNumeric
 */
class Google_AnalyzeDataDescriptionOutputFeatureNumeric extends Google_Model
{
    /**
     * @var
     */
    public $count;
    /**
     * @var
     */
    public $mean;
    /**
     * @var
     */
    public $variance;

    /**
     * @param $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param $mean
     */
    public function setMean($mean)
    {
        $this->mean = $mean;
    }

    /**
     * @return mixed
     */
    public function getMean()
    {
        return $this->mean;
    }

    /**
     * @param $variance
     */
    public function setVariance($variance)
    {
        $this->variance = $variance;
    }

    /**
     * @return mixed
     */
    public function getVariance()
    {
        return $this->variance;
    }
}

/**
 * Class Google_AnalyzeDataDescriptionOutputFeatureText
 */
class Google_AnalyzeDataDescriptionOutputFeatureText extends Google_Model
{
    /**
     * @var
     */
    public $count;
    /**
     * @var
     */
    public $value;

    /**
     * @param $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}

/**
 * Class Google_AnalyzeModelDescription
 */
class Google_AnalyzeModelDescription extends Google_Model
{
    /**
     * @var
     */
    public $confusionMatrix;
    /**
     * @var
     */
    public $confusionMatrixRowTotals;
    /**
     * @var string
     */
    protected $__modelinfoType = 'Google_Insert2';
    /**
     * @var string
     */
    protected $__modelinfoDataType = '';
    /**
     * @var
     */
    public $modelinfo;

    /**
     * @param $confusionMatrix
     */
    public function setConfusionMatrix($confusionMatrix)
    {
        $this->confusionMatrix = $confusionMatrix;
    }

    /**
     * @return mixed
     */
    public function getConfusionMatrix()
    {
        return $this->confusionMatrix;
    }

    /**
     * @param $confusionMatrixRowTotals
     */
    public function setConfusionMatrixRowTotals($confusionMatrixRowTotals)
    {
        $this->confusionMatrixRowTotals = $confusionMatrixRowTotals;
    }

    /**
     * @return mixed
     */
    public function getConfusionMatrixRowTotals()
    {
        return $this->confusionMatrixRowTotals;
    }

    /**
     * @param Google_Insert2 $modelinfo
     */
    public function setModelinfo(Google_Insert2 $modelinfo)
    {
        $this->modelinfo = $modelinfo;
    }

    /**
     * @return mixed
     */
    public function getModelinfo()
    {
        return $this->modelinfo;
    }
}

/**
 * Class Google_Input
 */
class Google_Input extends Google_Model
{
    /**
     * @var string
     */
    protected $__inputType = 'Google_InputInput';
    /**
     * @var string
     */
    protected $__inputDataType = '';
    /**
     * @var
     */
    public $input;

    /**
     * @param Google_InputInput $input
     */
    public function setInput(Google_InputInput $input)
    {
        $this->input = $input;
    }

    /**
     * @return mixed
     */
    public function getInput()
    {
        return $this->input;
    }
}

/**
 * Class Google_InputInput
 */
class Google_InputInput extends Google_Model
{
    /**
     * @var
     */
    public $csvInstance;

    /**
     * @param $csvInstance
     * @throws Google_Exception
     */
    public function setCsvInstance(/* array(Google_object) */
        $csvInstance)
    {
        $this->assertIsArray($csvInstance, 'Google_object', __METHOD__);
        $this->csvInstance = $csvInstance;
    }

    /**
     * @return mixed
     */
    public function getCsvInstance()
    {
        return $this->csvInstance;
    }
}

/**
 * Class Google_Insert
 */
class Google_Insert extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $modelType;
    /**
     * @var
     */
    public $sourceModel;
    /**
     * @var
     */
    public $storageDataLocation;
    /**
     * @var
     */
    public $storagePMMLLocation;
    /**
     * @var
     */
    public $storagePMMLModelLocation;
    /**
     * @var string
     */
    protected $__trainingInstancesType = 'Google_InsertTrainingInstances';
    /**
     * @var string
     */
    protected $__trainingInstancesDataType = 'array';
    /**
     * @var
     */
    public $trainingInstances;
    /**
     * @var
     */
    public $utility;

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $modelType
     */
    public function setModelType($modelType)
    {
        $this->modelType = $modelType;
    }

    /**
     * @return mixed
     */
    public function getModelType()
    {
        return $this->modelType;
    }

    /**
     * @param $sourceModel
     */
    public function setSourceModel($sourceModel)
    {
        $this->sourceModel = $sourceModel;
    }

    /**
     * @return mixed
     */
    public function getSourceModel()
    {
        return $this->sourceModel;
    }

    /**
     * @param $storageDataLocation
     */
    public function setStorageDataLocation($storageDataLocation)
    {
        $this->storageDataLocation = $storageDataLocation;
    }

    /**
     * @return mixed
     */
    public function getStorageDataLocation()
    {
        return $this->storageDataLocation;
    }

    /**
     * @param $storagePMMLLocation
     */
    public function setStoragePMMLLocation($storagePMMLLocation)
    {
        $this->storagePMMLLocation = $storagePMMLLocation;
    }

    /**
     * @return mixed
     */
    public function getStoragePMMLLocation()
    {
        return $this->storagePMMLLocation;
    }

    /**
     * @param $storagePMMLModelLocation
     */
    public function setStoragePMMLModelLocation($storagePMMLModelLocation)
    {
        $this->storagePMMLModelLocation = $storagePMMLModelLocation;
    }

    /**
     * @return mixed
     */
    public function getStoragePMMLModelLocation()
    {
        return $this->storagePMMLModelLocation;
    }

    /**
     * @param $trainingInstances
     * @throws Google_Exception
     */
    public function setTrainingInstances(/* array(Google_InsertTrainingInstances) */
        $trainingInstances)
    {
        $this->assertIsArray($trainingInstances, 'Google_InsertTrainingInstances', __METHOD__);
        $this->trainingInstances = $trainingInstances;
    }

    /**
     * @return mixed
     */
    public function getTrainingInstances()
    {
        return $this->trainingInstances;
    }

    /**
     * @param $utility
     * @throws Google_Exception
     */
    public function setUtility(/* array(Google_double) */
        $utility)
    {
        $this->assertIsArray($utility, 'Google_double', __METHOD__);
        $this->utility = $utility;
    }

    /**
     * @return mixed
     */
    public function getUtility()
    {
        return $this->utility;
    }
}

/**
 * Class Google_Insert2
 */
class Google_Insert2 extends Google_Model
{
    /**
     * @var
     */
    public $created;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__modelInfoType = 'Google_Insert2ModelInfo';
    /**
     * @var string
     */
    protected $__modelInfoDataType = '';
    /**
     * @var
     */
    public $modelInfo;
    /**
     * @var
     */
    public $modelType;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $storageDataLocation;
    /**
     * @var
     */
    public $storagePMMLLocation;
    /**
     * @var
     */
    public $storagePMMLModelLocation;
    /**
     * @var
     */
    public $trainingComplete;
    /**
     * @var
     */
    public $trainingStatus;

    /**
     * @param $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param Google_Insert2ModelInfo $modelInfo
     */
    public function setModelInfo(Google_Insert2ModelInfo $modelInfo)
    {
        $this->modelInfo = $modelInfo;
    }

    /**
     * @return mixed
     */
    public function getModelInfo()
    {
        return $this->modelInfo;
    }

    /**
     * @param $modelType
     */
    public function setModelType($modelType)
    {
        $this->modelType = $modelType;
    }

    /**
     * @return mixed
     */
    public function getModelType()
    {
        return $this->modelType;
    }

    /**
     * @param $selfLink
     */
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    /**
     * @param $storageDataLocation
     */
    public function setStorageDataLocation($storageDataLocation)
    {
        $this->storageDataLocation = $storageDataLocation;
    }

    /**
     * @return mixed
     */
    public function getStorageDataLocation()
    {
        return $this->storageDataLocation;
    }

    /**
     * @param $storagePMMLLocation
     */
    public function setStoragePMMLLocation($storagePMMLLocation)
    {
        $this->storagePMMLLocation = $storagePMMLLocation;
    }

    /**
     * @return mixed
     */
    public function getStoragePMMLLocation()
    {
        return $this->storagePMMLLocation;
    }

    /**
     * @param $storagePMMLModelLocation
     */
    public function setStoragePMMLModelLocation($storagePMMLModelLocation)
    {
        $this->storagePMMLModelLocation = $storagePMMLModelLocation;
    }

    /**
     * @return mixed
     */
    public function getStoragePMMLModelLocation()
    {
        return $this->storagePMMLModelLocation;
    }

    /**
     * @param $trainingComplete
     */
    public function setTrainingComplete($trainingComplete)
    {
        $this->trainingComplete = $trainingComplete;
    }

    /**
     * @return mixed
     */
    public function getTrainingComplete()
    {
        return $this->trainingComplete;
    }

    /**
     * @param $trainingStatus
     */
    public function setTrainingStatus($trainingStatus)
    {
        $this->trainingStatus = $trainingStatus;
    }

    /**
     * @return mixed
     */
    public function getTrainingStatus()
    {
        return $this->trainingStatus;
    }
}

/**
 * Class Google_Insert2ModelInfo
 */
class Google_Insert2ModelInfo extends Google_Model
{
    /**
     * @var
     */
    public $classWeightedAccuracy;
    /**
     * @var
     */
    public $classificationAccuracy;
    /**
     * @var
     */
    public $meanSquaredError;
    /**
     * @var
     */
    public $modelType;
    /**
     * @var
     */
    public $numberInstances;
    /**
     * @var
     */
    public $numberLabels;

    /**
     * @param $classWeightedAccuracy
     */
    public function setClassWeightedAccuracy($classWeightedAccuracy)
    {
        $this->classWeightedAccuracy = $classWeightedAccuracy;
    }

    /**
     * @return mixed
     */
    public function getClassWeightedAccuracy()
    {
        return $this->classWeightedAccuracy;
    }

    /**
     * @param $classificationAccuracy
     */
    public function setClassificationAccuracy($classificationAccuracy)
    {
        $this->classificationAccuracy = $classificationAccuracy;
    }

    /**
     * @return mixed
     */
    public function getClassificationAccuracy()
    {
        return $this->classificationAccuracy;
    }

    /**
     * @param $meanSquaredError
     */
    public function setMeanSquaredError($meanSquaredError)
    {
        $this->meanSquaredError = $meanSquaredError;
    }

    /**
     * @return mixed
     */
    public function getMeanSquaredError()
    {
        return $this->meanSquaredError;
    }

    /**
     * @param $modelType
     */
    public function setModelType($modelType)
    {
        $this->modelType = $modelType;
    }

    /**
     * @return mixed
     */
    public function getModelType()
    {
        return $this->modelType;
    }

    /**
     * @param $numberInstances
     */
    public function setNumberInstances($numberInstances)
    {
        $this->numberInstances = $numberInstances;
    }

    /**
     * @return mixed
     */
    public function getNumberInstances()
    {
        return $this->numberInstances;
    }

    /**
     * @param $numberLabels
     */
    public function setNumberLabels($numberLabels)
    {
        $this->numberLabels = $numberLabels;
    }

    /**
     * @return mixed
     */
    public function getNumberLabels()
    {
        return $this->numberLabels;
    }
}

/**
 * Class Google_InsertTrainingInstances
 */
class Google_InsertTrainingInstances extends Google_Model
{
    /**
     * @var
     */
    public $csvInstance;
    /**
     * @var
     */
    public $output;

    /**
     * @param $csvInstance
     * @throws Google_Exception
     */
    public function setCsvInstance(/* array(Google_object) */
        $csvInstance)
    {
        $this->assertIsArray($csvInstance, 'Google_object', __METHOD__);
        $this->csvInstance = $csvInstance;
    }

    /**
     * @return mixed
     */
    public function getCsvInstance()
    {
        return $this->csvInstance;
    }

    /**
     * @param $output
     */
    public function setOutput($output)
    {
        $this->output = $output;
    }

    /**
     * @return mixed
     */
    public function getOutput()
    {
        return $this->output;
    }
}

/**
 * Class Google_Output
 */
class Google_Output extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $outputLabel;
    /**
     * @var string
     */
    protected $__outputMultiType = 'Google_OutputOutputMulti';
    /**
     * @var string
     */
    protected $__outputMultiDataType = 'array';
    /**
     * @var
     */
    public $outputMulti;
    /**
     * @var
     */
    public $outputValue;
    /**
     * @var
     */
    public $selfLink;

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $outputLabel
     */
    public function setOutputLabel($outputLabel)
    {
        $this->outputLabel = $outputLabel;
    }

    /**
     * @return mixed
     */
    public function getOutputLabel()
    {
        return $this->outputLabel;
    }

    /**
     * @param $outputMulti
     * @throws Google_Exception
     */
    public function setOutputMulti(/* array(Google_OutputOutputMulti) */
        $outputMulti)
    {
        $this->assertIsArray($outputMulti, 'Google_OutputOutputMulti', __METHOD__);
        $this->outputMulti = $outputMulti;
    }

    /**
     * @return mixed
     */
    public function getOutputMulti()
    {
        return $this->outputMulti;
    }

    /**
     * @param $outputValue
     */
    public function setOutputValue($outputValue)
    {
        $this->outputValue = $outputValue;
    }

    /**
     * @return mixed
     */
    public function getOutputValue()
    {
        return $this->outputValue;
    }

    /**
     * @param $selfLink
     */
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }
}

/**
 * Class Google_OutputOutputMulti
 */
class Google_OutputOutputMulti extends Google_Model
{
    /**
     * @var
     */
    public $label;
    /**
     * @var
     */
    public $score;

    /**
     * @param $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }
}

/**
 * Class Google_PredictionList
 */
class Google_PredictionList extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Insert2';
    /**
     * @var string
     */
    protected $__itemsDataType = 'array';
    /**
     * @var
     */
    public $items;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $nextPageToken;
    /**
     * @var
     */
    public $selfLink;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Insert2) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Insert2', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $nextPageToken
     */
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    /**
     * @param $selfLink
     */
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }
}

/**
 * Class Google_Update
 */
class Google_Update extends Google_Model
{
    /**
     * @var
     */
    public $csvInstance;
    /**
     * @var
     */
    public $output;

    /**
     * @param $csvInstance
     * @throws Google_Exception
     */
    public function setCsvInstance(/* array(Google_object) */
        $csvInstance)
    {
        $this->assertIsArray($csvInstance, 'Google_object', __METHOD__);
        $this->csvInstance = $csvInstance;
    }

    /**
     * @return mixed
     */
    public function getCsvInstance()
    {
        return $this->csvInstance;
    }

    /**
     * @param $output
     */
    public function setOutput($output)
    {
        $this->output = $output;
    }

    /**
     * @return mixed
     */
    public function getOutput()
    {
        return $this->output;
    }
}
