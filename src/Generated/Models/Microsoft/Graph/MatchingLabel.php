<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MatchingLabel implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var ApplicationMode|null $applicationMode  */
    private ?ApplicationMode $applicationMode = null;
    
    /** @var string|null $description  */
    private ?string $description = null;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var string|null $id  */
    private ?string $id = null;
    
    /** @var bool|null $isEndpointProtectionEnabled  */
    private ?bool $isEndpointProtectionEnabled = null;
    
    /** @var array<LabelActionBase>|null $labelActions  */
    private ?array $labelActions = null;
    
    /** @var string|null $name  */
    private ?string $name = null;
    
    /** @var string|null $policyTip  */
    private ?string $policyTip = null;
    
    /** @var int|null $priority  */
    private ?int $priority = null;
    
    /** @var string|null $toolTip  */
    private ?string $toolTip = null;
    
    /**
     * Instantiates a new matchingLabel and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MatchingLabel
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): MatchingLabel {
        return new MatchingLabel();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applicationMode property value. 
     * @return ApplicationMode|null
    */
    public function getApplicationMode(): ?ApplicationMode {
        return $this->applicationMode;
    }

    /**
     * Gets the description property value. 
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. 
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
        return  [
            'applicationMode' => function (self $o, ParseNode $n) { $o->setApplicationMode($n->getEnumValue(ApplicationMode::class)); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'id' => function (self $o, ParseNode $n) { $o->setId($n->getStringValue()); },
            'isEndpointProtectionEnabled' => function (self $o, ParseNode $n) { $o->setIsEndpointProtectionEnabled($n->getBooleanValue()); },
            'labelActions' => function (self $o, ParseNode $n) { $o->setLabelActions($n->getCollectionOfObjectValues(LabelActionBase::class)); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'policyTip' => function (self $o, ParseNode $n) { $o->setPolicyTip($n->getStringValue()); },
            'priority' => function (self $o, ParseNode $n) { $o->setPriority($n->getIntegerValue()); },
            'toolTip' => function (self $o, ParseNode $n) { $o->setToolTip($n->getStringValue()); },
        ];
    }

    /**
     * Gets the id property value. 
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isEndpointProtectionEnabled property value. 
     * @return bool|null
    */
    public function getIsEndpointProtectionEnabled(): ?bool {
        return $this->isEndpointProtectionEnabled;
    }

    /**
     * Gets the labelActions property value. 
     * @return array<LabelActionBase>|null
    */
    public function getLabelActions(): ?array {
        return $this->labelActions;
    }

    /**
     * Gets the name property value. 
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the policyTip property value. 
     * @return string|null
    */
    public function getPolicyTip(): ?string {
        return $this->policyTip;
    }

    /**
     * Gets the priority property value. 
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->priority;
    }

    /**
     * Gets the toolTip property value. 
     * @return string|null
    */
    public function getToolTip(): ?string {
        return $this->toolTip;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('applicationMode', $this->applicationMode);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('id', $this->id);
        $writer->writeBooleanValue('isEndpointProtectionEnabled', $this->isEndpointProtectionEnabled);
        $writer->writeCollectionOfObjectValues('labelActions', $this->labelActions);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('policyTip', $this->policyTip);
        $writer->writeIntegerValue('priority', $this->priority);
        $writer->writeStringValue('toolTip', $this->toolTip);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the applicationMode property value. 
     *  @param ApplicationMode|null $value Value to set for the applicationMode property.
    */
    public function setApplicationMode(?ApplicationMode $value ): void {
        $this->applicationMode = $value;
    }

    /**
     * Sets the description property value. 
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the id property value. 
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the isEndpointProtectionEnabled property value. 
     *  @param bool|null $value Value to set for the isEndpointProtectionEnabled property.
    */
    public function setIsEndpointProtectionEnabled(?bool $value ): void {
        $this->isEndpointProtectionEnabled = $value;
    }

    /**
     * Sets the labelActions property value. 
     *  @param array<LabelActionBase>|null $value Value to set for the labelActions property.
    */
    public function setLabelActions(?array $value ): void {
        $this->labelActions = $value;
    }

    /**
     * Sets the name property value. 
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the policyTip property value. 
     *  @param string|null $value Value to set for the policyTip property.
    */
    public function setPolicyTip(?string $value ): void {
        $this->policyTip = $value;
    }

    /**
     * Sets the priority property value. 
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the toolTip property value. 
     *  @param string|null $value Value to set for the toolTip property.
    */
    public function setToolTip(?string $value ): void {
        $this->toolTip = $value;
    }

}
