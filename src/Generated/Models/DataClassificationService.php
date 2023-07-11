<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DataClassificationService extends Entity implements Parsable 
{
    /**
     * Instantiates a new dataClassificationService and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DataClassificationService
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DataClassificationService {
        return new DataClassificationService();
    }

    /**
     * Gets the classifyFileJobs property value. The classifyFileJobs property
     * @return array<JobResponseBase>|null
    */
    public function getClassifyFileJobs(): ?array {
        $val = $this->getBackingStore()->get('classifyFileJobs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, JobResponseBase::class);
            /** @var array<JobResponseBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classifyFileJobs'");
    }

    /**
     * Gets the classifyTextJobs property value. The classifyTextJobs property
     * @return array<JobResponseBase>|null
    */
    public function getClassifyTextJobs(): ?array {
        $val = $this->getBackingStore()->get('classifyTextJobs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, JobResponseBase::class);
            /** @var array<JobResponseBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classifyTextJobs'");
    }

    /**
     * Gets the evaluateDlpPoliciesJobs property value. The evaluateDlpPoliciesJobs property
     * @return array<JobResponseBase>|null
    */
    public function getEvaluateDlpPoliciesJobs(): ?array {
        $val = $this->getBackingStore()->get('evaluateDlpPoliciesJobs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, JobResponseBase::class);
            /** @var array<JobResponseBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'evaluateDlpPoliciesJobs'");
    }

    /**
     * Gets the evaluateLabelJobs property value. The evaluateLabelJobs property
     * @return array<JobResponseBase>|null
    */
    public function getEvaluateLabelJobs(): ?array {
        $val = $this->getBackingStore()->get('evaluateLabelJobs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, JobResponseBase::class);
            /** @var array<JobResponseBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'evaluateLabelJobs'");
    }

    /**
     * Gets the exactMatchDataStores property value. The exactMatchDataStores property
     * @return array<ExactMatchDataStore>|null
    */
    public function getExactMatchDataStores(): ?array {
        $val = $this->getBackingStore()->get('exactMatchDataStores');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ExactMatchDataStore::class);
            /** @var array<ExactMatchDataStore>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exactMatchDataStores'");
    }

    /**
     * Gets the exactMatchUploadAgents property value. The exactMatchUploadAgents property
     * @return array<ExactMatchUploadAgent>|null
    */
    public function getExactMatchUploadAgents(): ?array {
        $val = $this->getBackingStore()->get('exactMatchUploadAgents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ExactMatchUploadAgent::class);
            /** @var array<ExactMatchUploadAgent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exactMatchUploadAgents'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'classifyFileJobs' => fn(ParseNode $n) => $o->setClassifyFileJobs($n->getCollectionOfObjectValues([JobResponseBase::class, 'createFromDiscriminatorValue'])),
            'classifyTextJobs' => fn(ParseNode $n) => $o->setClassifyTextJobs($n->getCollectionOfObjectValues([JobResponseBase::class, 'createFromDiscriminatorValue'])),
            'evaluateDlpPoliciesJobs' => fn(ParseNode $n) => $o->setEvaluateDlpPoliciesJobs($n->getCollectionOfObjectValues([JobResponseBase::class, 'createFromDiscriminatorValue'])),
            'evaluateLabelJobs' => fn(ParseNode $n) => $o->setEvaluateLabelJobs($n->getCollectionOfObjectValues([JobResponseBase::class, 'createFromDiscriminatorValue'])),
            'exactMatchDataStores' => fn(ParseNode $n) => $o->setExactMatchDataStores($n->getCollectionOfObjectValues([ExactMatchDataStore::class, 'createFromDiscriminatorValue'])),
            'exactMatchUploadAgents' => fn(ParseNode $n) => $o->setExactMatchUploadAgents($n->getCollectionOfObjectValues([ExactMatchUploadAgent::class, 'createFromDiscriminatorValue'])),
            'jobs' => fn(ParseNode $n) => $o->setJobs($n->getCollectionOfObjectValues([JobResponseBase::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sensitiveTypes' => fn(ParseNode $n) => $o->setSensitiveTypes($n->getCollectionOfObjectValues([SensitiveType::class, 'createFromDiscriminatorValue'])),
            'sensitivityLabels' => fn(ParseNode $n) => $o->setSensitivityLabels($n->getCollectionOfObjectValues([SensitivityLabel::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the jobs property value. The jobs property
     * @return array<JobResponseBase>|null
    */
    public function getJobs(): ?array {
        $val = $this->getBackingStore()->get('jobs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, JobResponseBase::class);
            /** @var array<JobResponseBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'jobs'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the sensitiveTypes property value. The sensitiveTypes property
     * @return array<SensitiveType>|null
    */
    public function getSensitiveTypes(): ?array {
        $val = $this->getBackingStore()->get('sensitiveTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SensitiveType::class);
            /** @var array<SensitiveType>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitiveTypes'");
    }

    /**
     * Gets the sensitivityLabels property value. The sensitivityLabels property
     * @return array<SensitivityLabel>|null
    */
    public function getSensitivityLabels(): ?array {
        $val = $this->getBackingStore()->get('sensitivityLabels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SensitivityLabel::class);
            /** @var array<SensitivityLabel>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitivityLabels'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('classifyFileJobs', $this->getClassifyFileJobs());
        $writer->writeCollectionOfObjectValues('classifyTextJobs', $this->getClassifyTextJobs());
        $writer->writeCollectionOfObjectValues('evaluateDlpPoliciesJobs', $this->getEvaluateDlpPoliciesJobs());
        $writer->writeCollectionOfObjectValues('evaluateLabelJobs', $this->getEvaluateLabelJobs());
        $writer->writeCollectionOfObjectValues('exactMatchDataStores', $this->getExactMatchDataStores());
        $writer->writeCollectionOfObjectValues('exactMatchUploadAgents', $this->getExactMatchUploadAgents());
        $writer->writeCollectionOfObjectValues('jobs', $this->getJobs());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('sensitiveTypes', $this->getSensitiveTypes());
        $writer->writeCollectionOfObjectValues('sensitivityLabels', $this->getSensitivityLabels());
    }

    /**
     * Sets the classifyFileJobs property value. The classifyFileJobs property
     * @param array<JobResponseBase>|null $value Value to set for the classifyFileJobs property.
    */
    public function setClassifyFileJobs(?array $value): void {
        $this->getBackingStore()->set('classifyFileJobs', $value);
    }

    /**
     * Sets the classifyTextJobs property value. The classifyTextJobs property
     * @param array<JobResponseBase>|null $value Value to set for the classifyTextJobs property.
    */
    public function setClassifyTextJobs(?array $value): void {
        $this->getBackingStore()->set('classifyTextJobs', $value);
    }

    /**
     * Sets the evaluateDlpPoliciesJobs property value. The evaluateDlpPoliciesJobs property
     * @param array<JobResponseBase>|null $value Value to set for the evaluateDlpPoliciesJobs property.
    */
    public function setEvaluateDlpPoliciesJobs(?array $value): void {
        $this->getBackingStore()->set('evaluateDlpPoliciesJobs', $value);
    }

    /**
     * Sets the evaluateLabelJobs property value. The evaluateLabelJobs property
     * @param array<JobResponseBase>|null $value Value to set for the evaluateLabelJobs property.
    */
    public function setEvaluateLabelJobs(?array $value): void {
        $this->getBackingStore()->set('evaluateLabelJobs', $value);
    }

    /**
     * Sets the exactMatchDataStores property value. The exactMatchDataStores property
     * @param array<ExactMatchDataStore>|null $value Value to set for the exactMatchDataStores property.
    */
    public function setExactMatchDataStores(?array $value): void {
        $this->getBackingStore()->set('exactMatchDataStores', $value);
    }

    /**
     * Sets the exactMatchUploadAgents property value. The exactMatchUploadAgents property
     * @param array<ExactMatchUploadAgent>|null $value Value to set for the exactMatchUploadAgents property.
    */
    public function setExactMatchUploadAgents(?array $value): void {
        $this->getBackingStore()->set('exactMatchUploadAgents', $value);
    }

    /**
     * Sets the jobs property value. The jobs property
     * @param array<JobResponseBase>|null $value Value to set for the jobs property.
    */
    public function setJobs(?array $value): void {
        $this->getBackingStore()->set('jobs', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sensitiveTypes property value. The sensitiveTypes property
     * @param array<SensitiveType>|null $value Value to set for the sensitiveTypes property.
    */
    public function setSensitiveTypes(?array $value): void {
        $this->getBackingStore()->set('sensitiveTypes', $value);
    }

    /**
     * Sets the sensitivityLabels property value. The sensitivityLabels property
     * @param array<SensitivityLabel>|null $value Value to set for the sensitivityLabels property.
    */
    public function setSensitivityLabels(?array $value): void {
        $this->getBackingStore()->set('sensitivityLabels', $value);
    }

}
