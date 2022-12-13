<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class LicenseAssignmentState implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new licenseAssignmentState and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LicenseAssignmentState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LicenseAssignmentState {
        return new LicenseAssignmentState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the assignedByGroup property value. Indicates whether the license is directly-assigned or inherited from a group. If directly-assigned, this field is null; if inherited through a group membership, this field contains the ID of the group. Read-Only.
     * @return string|null
    */
    public function getAssignedByGroup(): ?string {
        return $this->getBackingStore()->get('assignedByGroup');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the disabledPlans property value. The service plans that are disabled in this assignment. Read-Only.
     * @return array<Guid>|null
    */
    public function getDisabledPlans(): ?array {
        return $this->getBackingStore()->get('disabledPlans');
    }

    /**
     * Gets the error property value. License assignment failure error. If the license is assigned successfully, this field will be Null. Read-Only. The possible values are CountViolation, MutuallyExclusiveViolation, DependencyViolation, ProhibitedInUsageLocationViolation, UniquenessViolation, and Other. For more information on how to identify and resolve license assignment errors see here.
     * @return string|null
    */
    public function getError(): ?string {
        return $this->getBackingStore()->get('error');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignedByGroup' => fn(ParseNode $n) => $o->setAssignedByGroup($n->getStringValue()),
            'disabledPlans' => fn(ParseNode $n) => $o->setDisabledPlans($n->getCollectionOfPrimitiveValues()),
            'error' => fn(ParseNode $n) => $o->setError($n->getStringValue()),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'skuId' => fn(ParseNode $n) => $o->setSkuId($n->getObjectValue([Guid::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
        ];
    }

    /**
     * Gets the lastUpdatedDateTime property value. The timestamp when the state of the license assignment was last updated.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastUpdatedDateTime');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the skuId property value. The unique identifier for the SKU. Read-Only.
     * @return Guid|null
    */
    public function getSkuId(): ?Guid {
        return $this->getBackingStore()->get('skuId');
    }

    /**
     * Gets the state property value. Indicate the current state of this assignment. Read-Only. The possible values are Active, ActiveWithError, Disabled, and Error.
     * @return string|null
    */
    public function getState(): ?string {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('assignedByGroup', $this->getAssignedByGroup());
        $writer->writeCollectionOfPrimitiveValues('disabledPlans', $this->getDisabledPlans());
        $writer->writeStringValue('error', $this->getError());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('skuId', $this->getSkuId());
        $writer->writeStringValue('state', $this->getState());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the assignedByGroup property value. Indicates whether the license is directly-assigned or inherited from a group. If directly-assigned, this field is null; if inherited through a group membership, this field contains the ID of the group. Read-Only.
     *  @param string|null $value Value to set for the assignedByGroup property.
    */
    public function setAssignedByGroup(?string $value): void {
        $this->getBackingStore()->set('assignedByGroup', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the disabledPlans property value. The service plans that are disabled in this assignment. Read-Only.
     *  @param array<Guid>|null $value Value to set for the disabledPlans property.
    */
    public function setDisabledPlans(?array $value): void {
        $this->getBackingStore()->set('disabledPlans', $value);
    }

    /**
     * Sets the error property value. License assignment failure error. If the license is assigned successfully, this field will be Null. Read-Only. The possible values are CountViolation, MutuallyExclusiveViolation, DependencyViolation, ProhibitedInUsageLocationViolation, UniquenessViolation, and Other. For more information on how to identify and resolve license assignment errors see here.
     *  @param string|null $value Value to set for the error property.
    */
    public function setError(?string $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. The timestamp when the state of the license assignment was last updated.
     *  @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the skuId property value. The unique identifier for the SKU. Read-Only.
     *  @param Guid|null $value Value to set for the skuId property.
    */
    public function setSkuId(?Guid $value): void {
        $this->getBackingStore()->set('skuId', $value);
    }

    /**
     * Sets the state property value. Indicate the current state of this assignment. Read-Only. The possible values are Active, ActiveWithError, Disabled, and Error.
     *  @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
