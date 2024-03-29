<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ManagementIntentInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ManagementIntentInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementIntentInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagementIntentInfo {
        return new ManagementIntentInfo();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'managementIntentDisplayName' => fn(ParseNode $n) => $o->setManagementIntentDisplayName($n->getStringValue()),
            'managementIntentId' => fn(ParseNode $n) => $o->setManagementIntentId($n->getStringValue()),
            'managementTemplates' => fn(ParseNode $n) => $o->setManagementTemplates($n->getCollectionOfObjectValues([ManagementTemplateDetailedInfo::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the managementIntentDisplayName property value. The display name for the management intent. Optional. Read-only.
     * @return string|null
    */
    public function getManagementIntentDisplayName(): ?string {
        $val = $this->getBackingStore()->get('managementIntentDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managementIntentDisplayName'");
    }

    /**
     * Gets the managementIntentId property value. The identifier for the management intent. Required. Read-only.
     * @return string|null
    */
    public function getManagementIntentId(): ?string {
        $val = $this->getBackingStore()->get('managementIntentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managementIntentId'");
    }

    /**
     * Gets the managementTemplates property value. The collection of management template information associated with the management intent. Optional. Read-only.
     * @return array<ManagementTemplateDetailedInfo>|null
    */
    public function getManagementTemplates(): ?array {
        $val = $this->getBackingStore()->get('managementTemplates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagementTemplateDetailedInfo::class);
            /** @var array<ManagementTemplateDetailedInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managementTemplates'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('managementIntentDisplayName', $this->getManagementIntentDisplayName());
        $writer->writeStringValue('managementIntentId', $this->getManagementIntentId());
        $writer->writeCollectionOfObjectValues('managementTemplates', $this->getManagementTemplates());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the managementIntentDisplayName property value. The display name for the management intent. Optional. Read-only.
     * @param string|null $value Value to set for the managementIntentDisplayName property.
    */
    public function setManagementIntentDisplayName(?string $value): void {
        $this->getBackingStore()->set('managementIntentDisplayName', $value);
    }

    /**
     * Sets the managementIntentId property value. The identifier for the management intent. Required. Read-only.
     * @param string|null $value Value to set for the managementIntentId property.
    */
    public function setManagementIntentId(?string $value): void {
        $this->getBackingStore()->set('managementIntentId', $value);
    }

    /**
     * Sets the managementTemplates property value. The collection of management template information associated with the management intent. Optional. Read-only.
     * @param array<ManagementTemplateDetailedInfo>|null $value Value to set for the managementTemplates property.
    */
    public function setManagementTemplates(?array $value): void {
        $this->getBackingStore()->set('managementTemplates', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
