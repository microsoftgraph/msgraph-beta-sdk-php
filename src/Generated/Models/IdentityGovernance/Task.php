<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Graph\Beta\Generated\Models\KeyValuePair;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Task extends Entity implements Parsable 
{
    /**
     * @var array<KeyValuePair>|null $arguments The arguments property
    */
    private ?array $arguments = null;
    
    /**
     * @var LifecycleTaskCategory|null $category The category property
    */
    private ?LifecycleTaskCategory $category = null;
    
    /**
     * @var bool|null $continueOnError The continueOnError property
    */
    private ?bool $continueOnError = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var int|null $executionSequence The executionSequence property
    */
    private ?int $executionSequence = null;
    
    /**
     * @var bool|null $isEnabled The isEnabled property
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var string|null $taskDefinitionId The taskDefinitionId property
    */
    private ?string $taskDefinitionId = null;
    
    /**
     * @var array<TaskProcessingResult>|null $taskProcessingResults The taskProcessingResults property
    */
    private ?array $taskProcessingResults = null;
    
    /**
     * Instantiates a new task and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.task');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Task
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Task {
        return new Task();
    }

    /**
     * Gets the arguments property value. The arguments property
     * @return array<KeyValuePair>|null
    */
    public function getArguments(): ?array {
        return $this->arguments;
    }

    /**
     * Gets the category property value. The category property
     * @return LifecycleTaskCategory|null
    */
    public function getCategory(): ?LifecycleTaskCategory {
        return $this->category;
    }

    /**
     * Gets the continueOnError property value. The continueOnError property
     * @return bool|null
    */
    public function getContinueOnError(): ?bool {
        return $this->continueOnError;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the executionSequence property value. The executionSequence property
     * @return int|null
    */
    public function getExecutionSequence(): ?int {
        return $this->executionSequence;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'arguments' => function (ParseNode $n) use ($o) { $o->setArguments($n->getCollectionOfObjectValues(array(KeyValuePair::class, 'createFromDiscriminatorValue'))); },
            'category' => function (ParseNode $n) use ($o) { $o->setCategory($n->getEnumValue(LifecycleTaskCategory::class)); },
            'continueOnError' => function (ParseNode $n) use ($o) { $o->setContinueOnError($n->getBooleanValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'executionSequence' => function (ParseNode $n) use ($o) { $o->setExecutionSequence($n->getIntegerValue()); },
            'isEnabled' => function (ParseNode $n) use ($o) { $o->setIsEnabled($n->getBooleanValue()); },
            'taskDefinitionId' => function (ParseNode $n) use ($o) { $o->setTaskDefinitionId($n->getStringValue()); },
            'taskProcessingResults' => function (ParseNode $n) use ($o) { $o->setTaskProcessingResults($n->getCollectionOfObjectValues(array(TaskProcessingResult::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the isEnabled property value. The isEnabled property
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the taskDefinitionId property value. The taskDefinitionId property
     * @return string|null
    */
    public function getTaskDefinitionId(): ?string {
        return $this->taskDefinitionId;
    }

    /**
     * Gets the taskProcessingResults property value. The taskProcessingResults property
     * @return array<TaskProcessingResult>|null
    */
    public function getTaskProcessingResults(): ?array {
        return $this->taskProcessingResults;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('arguments', $this->arguments);
        $writer->writeEnumValue('category', $this->category);
        $writer->writeBooleanValue('continueOnError', $this->continueOnError);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeIntegerValue('executionSequence', $this->executionSequence);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeStringValue('taskDefinitionId', $this->taskDefinitionId);
        $writer->writeCollectionOfObjectValues('taskProcessingResults', $this->taskProcessingResults);
    }

    /**
     * Sets the arguments property value. The arguments property
     *  @param array<KeyValuePair>|null $value Value to set for the arguments property.
    */
    public function setArguments(?array $value ): void {
        $this->arguments = $value;
    }

    /**
     * Sets the category property value. The category property
     *  @param LifecycleTaskCategory|null $value Value to set for the category property.
    */
    public function setCategory(?LifecycleTaskCategory $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the continueOnError property value. The continueOnError property
     *  @param bool|null $value Value to set for the continueOnError property.
    */
    public function setContinueOnError(?bool $value ): void {
        $this->continueOnError = $value;
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the executionSequence property value. The executionSequence property
     *  @param int|null $value Value to set for the executionSequence property.
    */
    public function setExecutionSequence(?int $value ): void {
        $this->executionSequence = $value;
    }

    /**
     * Sets the isEnabled property value. The isEnabled property
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the taskDefinitionId property value. The taskDefinitionId property
     *  @param string|null $value Value to set for the taskDefinitionId property.
    */
    public function setTaskDefinitionId(?string $value ): void {
        $this->taskDefinitionId = $value;
    }

    /**
     * Sets the taskProcessingResults property value. The taskProcessingResults property
     *  @param array<TaskProcessingResult>|null $value Value to set for the taskProcessingResults property.
    */
    public function setTaskProcessingResults(?array $value ): void {
        $this->taskProcessingResults = $value;
    }

}
