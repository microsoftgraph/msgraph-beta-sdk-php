<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DataClassificationService extends Entity implements Parsable 
{
    /**
     * @var array<JobResponseBase>|null $classifyFileJobs The classifyFileJobs property
    */
    private ?array $classifyFileJobs = null;
    
    /**
     * @var array<JobResponseBase>|null $classifyTextJobs The classifyTextJobs property
    */
    private ?array $classifyTextJobs = null;
    
    /**
     * @var array<JobResponseBase>|null $evaluateDlpPoliciesJobs The evaluateDlpPoliciesJobs property
    */
    private ?array $evaluateDlpPoliciesJobs = null;
    
    /**
     * @var array<JobResponseBase>|null $evaluateLabelJobs The evaluateLabelJobs property
    */
    private ?array $evaluateLabelJobs = null;
    
    /**
     * @var array<ExactMatchDataStore>|null $exactMatchDataStores The exactMatchDataStores property
    */
    private ?array $exactMatchDataStores = null;
    
    /**
     * @var array<ExactMatchUploadAgent>|null $exactMatchUploadAgents The exactMatchUploadAgents property
    */
    private ?array $exactMatchUploadAgents = null;
    
    /**
     * @var array<JobResponseBase>|null $jobs The jobs property
    */
    private ?array $jobs = null;
    
    /**
     * @var array<SensitiveType>|null $sensitiveTypes The sensitiveTypes property
    */
    private ?array $sensitiveTypes = null;
    
    /**
     * @var array<SensitivityLabel>|null $sensitivityLabels The sensitivityLabels property
    */
    private ?array $sensitivityLabels = null;
    
    /**
     * Instantiates a new DataClassificationService and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.dataClassificationService');
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
        return $this->classifyFileJobs;
    }

    /**
     * Gets the classifyTextJobs property value. The classifyTextJobs property
     * @return array<JobResponseBase>|null
    */
    public function getClassifyTextJobs(): ?array {
        return $this->classifyTextJobs;
    }

    /**
     * Gets the evaluateDlpPoliciesJobs property value. The evaluateDlpPoliciesJobs property
     * @return array<JobResponseBase>|null
    */
    public function getEvaluateDlpPoliciesJobs(): ?array {
        return $this->evaluateDlpPoliciesJobs;
    }

    /**
     * Gets the evaluateLabelJobs property value. The evaluateLabelJobs property
     * @return array<JobResponseBase>|null
    */
    public function getEvaluateLabelJobs(): ?array {
        return $this->evaluateLabelJobs;
    }

    /**
     * Gets the exactMatchDataStores property value. The exactMatchDataStores property
     * @return array<ExactMatchDataStore>|null
    */
    public function getExactMatchDataStores(): ?array {
        return $this->exactMatchDataStores;
    }

    /**
     * Gets the exactMatchUploadAgents property value. The exactMatchUploadAgents property
     * @return array<ExactMatchUploadAgent>|null
    */
    public function getExactMatchUploadAgents(): ?array {
        return $this->exactMatchUploadAgents;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
            'sensitiveTypes' => fn(ParseNode $n) => $o->setSensitiveTypes($n->getCollectionOfObjectValues([SensitiveType::class, 'createFromDiscriminatorValue'])),
            'sensitivityLabels' => fn(ParseNode $n) => $o->setSensitivityLabels($n->getCollectionOfObjectValues([SensitivityLabel::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the jobs property value. The jobs property
     * @return array<JobResponseBase>|null
    */
    public function getJobs(): ?array {
        return $this->jobs;
    }

    /**
     * Gets the sensitiveTypes property value. The sensitiveTypes property
     * @return array<SensitiveType>|null
    */
    public function getSensitiveTypes(): ?array {
        return $this->sensitiveTypes;
    }

    /**
     * Gets the sensitivityLabels property value. The sensitivityLabels property
     * @return array<SensitivityLabel>|null
    */
    public function getSensitivityLabels(): ?array {
        return $this->sensitivityLabels;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('classifyFileJobs', $this->classifyFileJobs);
        $writer->writeCollectionOfObjectValues('classifyTextJobs', $this->classifyTextJobs);
        $writer->writeCollectionOfObjectValues('evaluateDlpPoliciesJobs', $this->evaluateDlpPoliciesJobs);
        $writer->writeCollectionOfObjectValues('evaluateLabelJobs', $this->evaluateLabelJobs);
        $writer->writeCollectionOfObjectValues('exactMatchDataStores', $this->exactMatchDataStores);
        $writer->writeCollectionOfObjectValues('exactMatchUploadAgents', $this->exactMatchUploadAgents);
        $writer->writeCollectionOfObjectValues('jobs', $this->jobs);
        $writer->writeCollectionOfObjectValues('sensitiveTypes', $this->sensitiveTypes);
        $writer->writeCollectionOfObjectValues('sensitivityLabels', $this->sensitivityLabels);
    }

    /**
     * Sets the classifyFileJobs property value. The classifyFileJobs property
     *  @param array<JobResponseBase>|null $value Value to set for the classifyFileJobs property.
    */
    public function setClassifyFileJobs(?array $value ): void {
        $this->classifyFileJobs = $value;
    }

    /**
     * Sets the classifyTextJobs property value. The classifyTextJobs property
     *  @param array<JobResponseBase>|null $value Value to set for the classifyTextJobs property.
    */
    public function setClassifyTextJobs(?array $value ): void {
        $this->classifyTextJobs = $value;
    }

    /**
     * Sets the evaluateDlpPoliciesJobs property value. The evaluateDlpPoliciesJobs property
     *  @param array<JobResponseBase>|null $value Value to set for the evaluateDlpPoliciesJobs property.
    */
    public function setEvaluateDlpPoliciesJobs(?array $value ): void {
        $this->evaluateDlpPoliciesJobs = $value;
    }

    /**
     * Sets the evaluateLabelJobs property value. The evaluateLabelJobs property
     *  @param array<JobResponseBase>|null $value Value to set for the evaluateLabelJobs property.
    */
    public function setEvaluateLabelJobs(?array $value ): void {
        $this->evaluateLabelJobs = $value;
    }

    /**
     * Sets the exactMatchDataStores property value. The exactMatchDataStores property
     *  @param array<ExactMatchDataStore>|null $value Value to set for the exactMatchDataStores property.
    */
    public function setExactMatchDataStores(?array $value ): void {
        $this->exactMatchDataStores = $value;
    }

    /**
     * Sets the exactMatchUploadAgents property value. The exactMatchUploadAgents property
     *  @param array<ExactMatchUploadAgent>|null $value Value to set for the exactMatchUploadAgents property.
    */
    public function setExactMatchUploadAgents(?array $value ): void {
        $this->exactMatchUploadAgents = $value;
    }

    /**
     * Sets the jobs property value. The jobs property
     *  @param array<JobResponseBase>|null $value Value to set for the jobs property.
    */
    public function setJobs(?array $value ): void {
        $this->jobs = $value;
    }

    /**
     * Sets the sensitiveTypes property value. The sensitiveTypes property
     *  @param array<SensitiveType>|null $value Value to set for the sensitiveTypes property.
    */
    public function setSensitiveTypes(?array $value ): void {
        $this->sensitiveTypes = $value;
    }

    /**
     * Sets the sensitivityLabels property value. The sensitivityLabels property
     *  @param array<SensitivityLabel>|null $value Value to set for the sensitivityLabels property.
    */
    public function setSensitivityLabels(?array $value ): void {
        $this->sensitivityLabels = $value;
    }

}
