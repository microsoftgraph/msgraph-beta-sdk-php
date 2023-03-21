<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UserMatchingSetting implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new userMatchingSetting and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserMatchingSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserMatchingSetting {
        return new UserMatchingSetting();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'matchTarget' => fn(ParseNode $n) => $o->setMatchTarget($n->getObjectValue([UserMatchTargetReferenceValue::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'priorityOrder' => fn(ParseNode $n) => $o->setPriorityOrder($n->getIntegerValue()),
            'roleGroup' => fn(ParseNode $n) => $o->setRoleGroup($n->getObjectValue([RoleGroup::class, 'createFromDiscriminatorValue'])),
            'sourceIdentifier' => fn(ParseNode $n) => $o->setSourceIdentifier($n->getObjectValue([IdentifierTypeReferenceValue::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the matchTarget property value. The RefUserMatchTarget for matching a user from the source with an Azure Active Directory user object.
     * @return UserMatchTargetReferenceValue|null
    */
    public function getMatchTarget(): ?UserMatchTargetReferenceValue {
        return $this->getBackingStore()->get('matchTarget');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the priorityOrder property value. The priority order to apply when a user has multiple RefRole codes assigned.
     * @return int|null
    */
    public function getPriorityOrder(): ?int {
        return $this->getBackingStore()->get('priorityOrder');
    }

    /**
     * Gets the roleGroup property value. The roleGroup property
     * @return RoleGroup|null
    */
    public function getRoleGroup(): ?RoleGroup {
        return $this->getBackingStore()->get('roleGroup');
    }

    /**
     * Gets the sourceIdentifier property value. The sourceIdentifier property
     * @return IdentifierTypeReferenceValue|null
    */
    public function getSourceIdentifier(): ?IdentifierTypeReferenceValue {
        return $this->getBackingStore()->get('sourceIdentifier');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('matchTarget', $this->getMatchTarget());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('priorityOrder', $this->getPriorityOrder());
        $writer->writeObjectValue('roleGroup', $this->getRoleGroup());
        $writer->writeObjectValue('sourceIdentifier', $this->getSourceIdentifier());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the matchTarget property value. The RefUserMatchTarget for matching a user from the source with an Azure Active Directory user object.
     * @param UserMatchTargetReferenceValue|null $value Value to set for the matchTarget property.
    */
    public function setMatchTarget(?UserMatchTargetReferenceValue $value): void {
        $this->getBackingStore()->set('matchTarget', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the priorityOrder property value. The priority order to apply when a user has multiple RefRole codes assigned.
     * @param int|null $value Value to set for the priorityOrder property.
    */
    public function setPriorityOrder(?int $value): void {
        $this->getBackingStore()->set('priorityOrder', $value);
    }

    /**
     * Sets the roleGroup property value. The roleGroup property
     * @param RoleGroup|null $value Value to set for the roleGroup property.
    */
    public function setRoleGroup(?RoleGroup $value): void {
        $this->getBackingStore()->set('roleGroup', $value);
    }

    /**
     * Sets the sourceIdentifier property value. The sourceIdentifier property
     * @param IdentifierTypeReferenceValue|null $value Value to set for the sourceIdentifier property.
    */
    public function setSourceIdentifier(?IdentifierTypeReferenceValue $value): void {
        $this->getBackingStore()->set('sourceIdentifier', $value);
    }

}
