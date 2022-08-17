<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MatchingLabel implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ApplicationMode|null $applicationMode The applicationMode property
    */
    private ?ApplicationMode $applicationMode = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isEndpointProtectionEnabled The isEndpointProtectionEnabled property
    */
    private ?bool $isEndpointProtectionEnabled = null;
    
    /**
     * @var array<LabelActionBase>|null $labelActions The labelActions property
    */
    private ?array $labelActions = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $policyTip The policyTip property
    */
    private ?string $policyTip = null;
    
    /**
     * @var int|null $priority The priority property
    */
    private ?int $priority = null;
    
    /**
     * @var string|null $toolTip The toolTip property
    */
    private ?string $toolTip = null;
    
    /**
     * Instantiates a new matchingLabel and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.matchingLabel');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MatchingLabel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MatchingLabel {
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
     * Gets the applicationMode property value. The applicationMode property
     * @return ApplicationMode|null
    */
    public function getApplicationMode(): ?ApplicationMode {
        return $this->applicationMode;
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicationMode' => function (ParseNode $n) use ($o) { $o->setApplicationMode($n->getEnumValue(ApplicationMode::class)); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
            'isEndpointProtectionEnabled' => function (ParseNode $n) use ($o) { $o->setIsEndpointProtectionEnabled($n->getBooleanValue()); },
            'labelActions' => function (ParseNode $n) use ($o) { $o->setLabelActions($n->getCollectionOfObjectValues(array(LabelActionBase::class, 'createFromDiscriminatorValue'))); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'policyTip' => function (ParseNode $n) use ($o) { $o->setPolicyTip($n->getStringValue()); },
            'priority' => function (ParseNode $n) use ($o) { $o->setPriority($n->getIntegerValue()); },
            'toolTip' => function (ParseNode $n) use ($o) { $o->setToolTip($n->getStringValue()); },
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isEndpointProtectionEnabled property value. The isEndpointProtectionEnabled property
     * @return bool|null
    */
    public function getIsEndpointProtectionEnabled(): ?bool {
        return $this->isEndpointProtectionEnabled;
    }

    /**
     * Gets the labelActions property value. The labelActions property
     * @return array<LabelActionBase>|null
    */
    public function getLabelActions(): ?array {
        return $this->labelActions;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the policyTip property value. The policyTip property
     * @return string|null
    */
    public function getPolicyTip(): ?string {
        return $this->policyTip;
    }

    /**
     * Gets the priority property value. The priority property
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->priority;
    }

    /**
     * Gets the toolTip property value. The toolTip property
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
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the applicationMode property value. The applicationMode property
     *  @param ApplicationMode|null $value Value to set for the applicationMode property.
    */
    public function setApplicationMode(?ApplicationMode $value ): void {
        $this->applicationMode = $value;
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
     * Sets the id property value. The id property
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the isEndpointProtectionEnabled property value. The isEndpointProtectionEnabled property
     *  @param bool|null $value Value to set for the isEndpointProtectionEnabled property.
    */
    public function setIsEndpointProtectionEnabled(?bool $value ): void {
        $this->isEndpointProtectionEnabled = $value;
    }

    /**
     * Sets the labelActions property value. The labelActions property
     *  @param array<LabelActionBase>|null $value Value to set for the labelActions property.
    */
    public function setLabelActions(?array $value ): void {
        $this->labelActions = $value;
    }

    /**
     * Sets the name property value. The name property
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the policyTip property value. The policyTip property
     *  @param string|null $value Value to set for the policyTip property.
    */
    public function setPolicyTip(?string $value ): void {
        $this->policyTip = $value;
    }

    /**
     * Sets the priority property value. The priority property
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the toolTip property value. The toolTip property
     *  @param string|null $value Value to set for the toolTip property.
    */
    public function setToolTip(?string $value ): void {
        $this->toolTip = $value;
    }

}
