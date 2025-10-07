<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Class to describe quality update policy's approval detail for specific catalog item
*/
class WindowsQualityUpdateCatalogItemPolicyDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new WindowsQualityUpdateCatalogItemPolicyDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsQualityUpdateCatalogItemPolicyDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsQualityUpdateCatalogItemPolicyDetail {
        return new WindowsQualityUpdateCatalogItemPolicyDetail();
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
     * Gets the approvalStatus property value. Enum to describe policy's approval status for catalogitems 
     * @return WindowsQualityUpdateApprovalStatus|null
    */
    public function getApprovalStatus(): ?WindowsQualityUpdateApprovalStatus {
        $val = $this->getBackingStore()->get('approvalStatus');
        if (is_null($val) || $val instanceof WindowsQualityUpdateApprovalStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvalStatus'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the catalogItemId property value. Catalog item id for this approval intend
     * @return string|null
    */
    public function getCatalogItemId(): ?string {
        $val = $this->getBackingStore()->get('catalogItemId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'catalogItemId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'approvalStatus' => fn(ParseNode $n) => $o->setApprovalStatus($n->getEnumValue(WindowsQualityUpdateApprovalStatus::class)),
            'catalogItemId' => fn(ParseNode $n) => $o->setCatalogItemId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'policyId' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
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
     * Gets the policyId property value. Policy Id for this approval intend
     * @return string|null
    */
    public function getPolicyId(): ?string {
        $val = $this->getBackingStore()->get('policyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('approvalStatus', $this->getApprovalStatus());
        $writer->writeStringValue('catalogItemId', $this->getCatalogItemId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('policyId', $this->getPolicyId());
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
     * Sets the approvalStatus property value. Enum to describe policy's approval status for catalogitems 
     * @param WindowsQualityUpdateApprovalStatus|null $value Value to set for the approvalStatus property.
    */
    public function setApprovalStatus(?WindowsQualityUpdateApprovalStatus $value): void {
        $this->getBackingStore()->set('approvalStatus', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the catalogItemId property value. Catalog item id for this approval intend
     * @param string|null $value Value to set for the catalogItemId property.
    */
    public function setCatalogItemId(?string $value): void {
        $this->getBackingStore()->set('catalogItemId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the policyId property value. Policy Id for this approval intend
     * @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value): void {
        $this->getBackingStore()->set('policyId', $value);
    }

}
