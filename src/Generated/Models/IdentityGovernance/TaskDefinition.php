<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TaskDefinition extends Entity implements Parsable 
{
    /**
     * @var LifecycleTaskCategory|null $category The category property
    */
    private ?LifecycleTaskCategory $category = null;
    
    /**
     * @var bool|null $continueOnError The continueOnError property
    */
    private ?bool $continueOnError = null;
    
    /**
     * @var string|null $description The description of the taskDefinition.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name of the taskDefinition`.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<Parameter>|null $parameters The parameters that must be supplied when creating a workflow task object.
    */
    private ?array $parameters = null;
    
    /**
     * @var int|null $version The version number of the taskDefinition. New records are pushed when we add support for new parameters.
    */
    private ?int $version = null;
    
    /**
     * Instantiates a new taskDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.taskDefinition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TaskDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TaskDefinition {
        return new TaskDefinition();
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
     * Gets the description property value. The description of the taskDefinition.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name of the taskDefinition`.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'category' => function (ParseNode $n) use ($o) { $o->setCategory($n->getEnumValue(LifecycleTaskCategory::class)); },
            'continueOnError' => function (ParseNode $n) use ($o) { $o->setContinueOnError($n->getBooleanValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'parameters' => function (ParseNode $n) use ($o) { $o->setParameters($n->getCollectionOfObjectValues(array(Parameter::class, 'createFromDiscriminatorValue'))); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the parameters property value. The parameters that must be supplied when creating a workflow task object.
     * @return array<Parameter>|null
    */
    public function getParameters(): ?array {
        return $this->parameters;
    }

    /**
     * Gets the version property value. The version number of the taskDefinition. New records are pushed when we add support for new parameters.
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('category', $this->category);
        $writer->writeBooleanValue('continueOnError', $this->continueOnError);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('parameters', $this->parameters);
        $writer->writeIntegerValue('version', $this->version);
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
     * Sets the description property value. The description of the taskDefinition.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name of the taskDefinition`.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the parameters property value. The parameters that must be supplied when creating a workflow task object.
     *  @param array<Parameter>|null $value Value to set for the parameters property.
    */
    public function setParameters(?array $value ): void {
        $this->parameters = $value;
    }

    /**
     * Sets the version property value. The version number of the taskDefinition. New records are pushed when we add support for new parameters.
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value ): void {
        $this->version = $value;
    }

}
