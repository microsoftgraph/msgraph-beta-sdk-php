<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Entity to record approval settings for windows quality update policies
*/
class WindowsQualityUpdateApprovalSetting implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new WindowsQualityUpdateApprovalSetting and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsQualityUpdateApprovalSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsQualityUpdateApprovalSetting {
        return new WindowsQualityUpdateApprovalSetting();
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
     * Gets the approvalMethodType property value. Enum type to describe the approval type for different type of quality updates.
     * @return WindowsQualityUpdatePolicyApprovalMethodType|null
    */
    public function getApprovalMethodType(): ?WindowsQualityUpdatePolicyApprovalMethodType {
        $val = $this->getBackingStore()->get('approvalMethodType');
        if (is_null($val) || $val instanceof WindowsQualityUpdatePolicyApprovalMethodType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvalMethodType'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the deferredDeploymentInDay property value. The deferral days for auto approval type, not applicable for manual approve
     * @return int|null
    */
    public function getDeferredDeploymentInDay(): ?int {
        $val = $this->getBackingStore()->get('deferredDeploymentInDay');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deferredDeploymentInDay'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'approvalMethodType' => fn(ParseNode $n) => $o->setApprovalMethodType($n->getEnumValue(WindowsQualityUpdatePolicyApprovalMethodType::class)),
            'deferredDeploymentInDay' => fn(ParseNode $n) => $o->setDeferredDeploymentInDay($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'windowsQualityUpdateCadence' => fn(ParseNode $n) => $o->setWindowsQualityUpdateCadence($n->getEnumValue(WindowsQualityUpdateCadence::class)),
            'windowsQualityUpdateCategory' => fn(ParseNode $n) => $o->setWindowsQualityUpdateCategory($n->getEnumValue(WindowsQualityUpdateCategory::class)),
        ];
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
     * Gets the windowsQualityUpdateCadence property value. The publishing cadence of the quality update. Possible values are: monthly, outOfBand. This property cannot be modified and is automatically populated when the catalog is created.
     * @return WindowsQualityUpdateCadence|null
    */
    public function getWindowsQualityUpdateCadence(): ?WindowsQualityUpdateCadence {
        $val = $this->getBackingStore()->get('windowsQualityUpdateCadence');
        if (is_null($val) || $val instanceof WindowsQualityUpdateCadence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsQualityUpdateCadence'");
    }

    /**
     * Gets the windowsQualityUpdateCategory property value. Windows quality update category
     * @return WindowsQualityUpdateCategory|null
    */
    public function getWindowsQualityUpdateCategory(): ?WindowsQualityUpdateCategory {
        $val = $this->getBackingStore()->get('windowsQualityUpdateCategory');
        if (is_null($val) || $val instanceof WindowsQualityUpdateCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsQualityUpdateCategory'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('approvalMethodType', $this->getApprovalMethodType());
        $writer->writeIntegerValue('deferredDeploymentInDay', $this->getDeferredDeploymentInDay());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('windowsQualityUpdateCadence', $this->getWindowsQualityUpdateCadence());
        $writer->writeEnumValue('windowsQualityUpdateCategory', $this->getWindowsQualityUpdateCategory());
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
     * Sets the approvalMethodType property value. Enum type to describe the approval type for different type of quality updates.
     * @param WindowsQualityUpdatePolicyApprovalMethodType|null $value Value to set for the approvalMethodType property.
    */
    public function setApprovalMethodType(?WindowsQualityUpdatePolicyApprovalMethodType $value): void {
        $this->getBackingStore()->set('approvalMethodType', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the deferredDeploymentInDay property value. The deferral days for auto approval type, not applicable for manual approve
     * @param int|null $value Value to set for the deferredDeploymentInDay property.
    */
    public function setDeferredDeploymentInDay(?int $value): void {
        $this->getBackingStore()->set('deferredDeploymentInDay', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the windowsQualityUpdateCadence property value. The publishing cadence of the quality update. Possible values are: monthly, outOfBand. This property cannot be modified and is automatically populated when the catalog is created.
     * @param WindowsQualityUpdateCadence|null $value Value to set for the windowsQualityUpdateCadence property.
    */
    public function setWindowsQualityUpdateCadence(?WindowsQualityUpdateCadence $value): void {
        $this->getBackingStore()->set('windowsQualityUpdateCadence', $value);
    }

    /**
     * Sets the windowsQualityUpdateCategory property value. Windows quality update category
     * @param WindowsQualityUpdateCategory|null $value Value to set for the windowsQualityUpdateCategory property.
    */
    public function setWindowsQualityUpdateCategory(?WindowsQualityUpdateCategory $value): void {
        $this->getBackingStore()->set('windowsQualityUpdateCategory', $value);
    }

}
