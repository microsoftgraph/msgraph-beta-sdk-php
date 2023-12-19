<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MatchingLabel implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new matchingLabel and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the applicationMode property value. The applicationMode property
     * @return MatchingLabel_applicationMode|null
    */
    public function getApplicationMode(): ?MatchingLabel_applicationMode {
        $val = $this->getBackingStore()->get('applicationMode');
        if (is_null($val) || $val instanceof MatchingLabel_applicationMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationMode'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicationMode' => fn(ParseNode $n) => $o->setApplicationMode($n->getEnumValue(MatchingLabel_applicationMode::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isEndpointProtectionEnabled' => fn(ParseNode $n) => $o->setIsEndpointProtectionEnabled($n->getBooleanValue()),
            'labelActions' => fn(ParseNode $n) => $o->setLabelActions($n->getCollectionOfObjectValues([LabelActionBase::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'policyTip' => fn(ParseNode $n) => $o->setPolicyTip($n->getStringValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'toolTip' => fn(ParseNode $n) => $o->setToolTip($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
    }

    /**
     * Gets the isEndpointProtectionEnabled property value. The isEndpointProtectionEnabled property
     * @return bool|null
    */
    public function getIsEndpointProtectionEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEndpointProtectionEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEndpointProtectionEnabled'");
    }

    /**
     * Gets the labelActions property value. The labelActions property
     * @return array<LabelActionBase>|null
    */
    public function getLabelActions(): ?array {
        $val = $this->getBackingStore()->get('labelActions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LabelActionBase::class);
            /** @var array<LabelActionBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'labelActions'");
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
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
     * Gets the policyTip property value. The policyTip property
     * @return string|null
    */
    public function getPolicyTip(): ?string {
        $val = $this->getBackingStore()->get('policyTip');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyTip'");
    }

    /**
     * Gets the priority property value. The priority property
     * @return int|null
    */
    public function getPriority(): ?int {
        $val = $this->getBackingStore()->get('priority');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priority'");
    }

    /**
     * Gets the toolTip property value. The toolTip property
     * @return string|null
    */
    public function getToolTip(): ?string {
        $val = $this->getBackingStore()->get('toolTip');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'toolTip'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('applicationMode', $this->getApplicationMode());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isEndpointProtectionEnabled', $this->getIsEndpointProtectionEnabled());
        $writer->writeCollectionOfObjectValues('labelActions', $this->getLabelActions());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('policyTip', $this->getPolicyTip());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeStringValue('toolTip', $this->getToolTip());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the applicationMode property value. The applicationMode property
     * @param MatchingLabel_applicationMode|null $value Value to set for the applicationMode property.
    */
    public function setApplicationMode(?MatchingLabel_applicationMode $value): void {
        $this->getBackingStore()->set('applicationMode', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the isEndpointProtectionEnabled property value. The isEndpointProtectionEnabled property
     * @param bool|null $value Value to set for the isEndpointProtectionEnabled property.
    */
    public function setIsEndpointProtectionEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEndpointProtectionEnabled', $value);
    }

    /**
     * Sets the labelActions property value. The labelActions property
     * @param array<LabelActionBase>|null $value Value to set for the labelActions property.
    */
    public function setLabelActions(?array $value): void {
        $this->getBackingStore()->set('labelActions', $value);
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the policyTip property value. The policyTip property
     * @param string|null $value Value to set for the policyTip property.
    */
    public function setPolicyTip(?string $value): void {
        $this->getBackingStore()->set('policyTip', $value);
    }

    /**
     * Sets the priority property value. The priority property
     * @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the toolTip property value. The toolTip property
     * @param string|null $value Value to set for the toolTip property.
    */
    public function setToolTip(?string $value): void {
        $this->getBackingStore()->set('toolTip', $value);
    }

}
