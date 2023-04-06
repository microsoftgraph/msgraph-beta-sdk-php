<?php

namespace Microsoft\Graph\Beta\Generated\Models\CallRecords;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PstnBlockedUsersLogRow implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new pstnBlockedUsersLogRow and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PstnBlockedUsersLogRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PstnBlockedUsersLogRow {
        return new PstnBlockedUsersLogRow();
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
     * Gets the blockDateTime property value. The blockDateTime property
     * @return DateTime|null
    */
    public function getBlockDateTime(): ?DateTime {
        return $this->getBackingStore()->get('blockDateTime');
    }

    /**
     * Gets the blockReason property value. The blockReason property
     * @return string|null
    */
    public function getBlockReason(): ?string {
        return $this->getBackingStore()->get('blockReason');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'blockDateTime' => fn(ParseNode $n) => $o->setBlockDateTime($n->getDateTimeValue()),
            'blockReason' => fn(ParseNode $n) => $o->setBlockReason($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'remediationId' => fn(ParseNode $n) => $o->setRemediationId($n->getStringValue()),
            'userBlockMode' => fn(ParseNode $n) => $o->setUserBlockMode($n->getEnumValue(PstnUserBlockMode::class)),
            'userDisplayName' => fn(ParseNode $n) => $o->setUserDisplayName($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
            'userTelephoneNumber' => fn(ParseNode $n) => $o->setUserTelephoneNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the remediationId property value. The remediationId property
     * @return string|null
    */
    public function getRemediationId(): ?string {
        return $this->getBackingStore()->get('remediationId');
    }

    /**
     * Gets the userBlockMode property value. The userBlockMode property
     * @return PstnUserBlockMode|null
    */
    public function getUserBlockMode(): ?PstnUserBlockMode {
        return $this->getBackingStore()->get('userBlockMode');
    }

    /**
     * Gets the userDisplayName property value. The userDisplayName property
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->getBackingStore()->get('userDisplayName');
    }

    /**
     * Gets the userId property value. The userId property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->getBackingStore()->get('userId');
    }

    /**
     * Gets the userPrincipalName property value. The userPrincipalName property
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Gets the userTelephoneNumber property value. The userTelephoneNumber property
     * @return string|null
    */
    public function getUserTelephoneNumber(): ?string {
        return $this->getBackingStore()->get('userTelephoneNumber');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('blockDateTime', $this->getBlockDateTime());
        $writer->writeStringValue('blockReason', $this->getBlockReason());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('remediationId', $this->getRemediationId());
        $writer->writeEnumValue('userBlockMode', $this->getUserBlockMode());
        $writer->writeStringValue('userDisplayName', $this->getUserDisplayName());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeStringValue('userTelephoneNumber', $this->getUserTelephoneNumber());
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
     * Sets the blockDateTime property value. The blockDateTime property
     * @param DateTime|null $value Value to set for the blockDateTime property.
    */
    public function setBlockDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('blockDateTime', $value);
    }

    /**
     * Sets the blockReason property value. The blockReason property
     * @param string|null $value Value to set for the blockReason property.
    */
    public function setBlockReason(?string $value): void {
        $this->getBackingStore()->set('blockReason', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the remediationId property value. The remediationId property
     * @param string|null $value Value to set for the remediationId property.
    */
    public function setRemediationId(?string $value): void {
        $this->getBackingStore()->set('remediationId', $value);
    }

    /**
     * Sets the userBlockMode property value. The userBlockMode property
     * @param PstnUserBlockMode|null $value Value to set for the userBlockMode property.
    */
    public function setUserBlockMode(?PstnUserBlockMode $value): void {
        $this->getBackingStore()->set('userBlockMode', $value);
    }

    /**
     * Sets the userDisplayName property value. The userDisplayName property
     * @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value): void {
        $this->getBackingStore()->set('userDisplayName', $value);
    }

    /**
     * Sets the userId property value. The userId property
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userPrincipalName property value. The userPrincipalName property
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

    /**
     * Sets the userTelephoneNumber property value. The userTelephoneNumber property
     * @param string|null $value Value to set for the userTelephoneNumber property.
    */
    public function setUserTelephoneNumber(?string $value): void {
        $this->getBackingStore()->set('userTelephoneNumber', $value);
    }

}
