<?php

namespace Microsoft\Graph\Beta\Generated\Models\Partner\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CustomerMfaInsight implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CustomerMfaInsight and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerMfaInsight
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerMfaInsight {
        return new CustomerMfaInsight();
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
     * Gets the compliantAdminsCount property value. The number of admins that are compliant with the MFA requirements
     * @return int|null
    */
    public function getCompliantAdminsCount(): ?int {
        $val = $this->getBackingStore()->get('compliantAdminsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliantAdminsCount'");
    }

    /**
     * Gets the compliantNonAdminsCount property value. The number of users that are compliant with the MFA requirements
     * @return int|null
    */
    public function getCompliantNonAdminsCount(): ?int {
        $val = $this->getBackingStore()->get('compliantNonAdminsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliantNonAdminsCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'compliantAdminsCount' => fn(ParseNode $n) => $o->setCompliantAdminsCount($n->getIntegerValue()),
            'compliantNonAdminsCount' => fn(ParseNode $n) => $o->setCompliantNonAdminsCount($n->getIntegerValue()),
            'legacyPerUserMfaStatus' => fn(ParseNode $n) => $o->setLegacyPerUserMfaStatus($n->getEnumValue(PolicyStatus::class)),
            'mfaConditionalAccessPolicyStatus' => fn(ParseNode $n) => $o->setMfaConditionalAccessPolicyStatus($n->getEnumValue(PolicyStatus::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'securityDefaultsStatus' => fn(ParseNode $n) => $o->setSecurityDefaultsStatus($n->getEnumValue(PolicyStatus::class)),
            'totalUsersCount' => fn(ParseNode $n) => $o->setTotalUsersCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the legacyPerUserMfaStatus property value. The legacyPerUserMfaStatus property
     * @return PolicyStatus|null
    */
    public function getLegacyPerUserMfaStatus(): ?PolicyStatus {
        $val = $this->getBackingStore()->get('legacyPerUserMfaStatus');
        if (is_null($val) || $val instanceof PolicyStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'legacyPerUserMfaStatus'");
    }

    /**
     * Gets the mfaConditionalAccessPolicyStatus property value. The mfaConditionalAccessPolicyStatus property
     * @return PolicyStatus|null
    */
    public function getMfaConditionalAccessPolicyStatus(): ?PolicyStatus {
        $val = $this->getBackingStore()->get('mfaConditionalAccessPolicyStatus');
        if (is_null($val) || $val instanceof PolicyStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mfaConditionalAccessPolicyStatus'");
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
     * Gets the securityDefaultsStatus property value. The securityDefaultsStatus property
     * @return PolicyStatus|null
    */
    public function getSecurityDefaultsStatus(): ?PolicyStatus {
        $val = $this->getBackingStore()->get('securityDefaultsStatus');
        if (is_null($val) || $val instanceof PolicyStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityDefaultsStatus'");
    }

    /**
     * Gets the totalUsersCount property value. The total number of users in the tenant
     * @return int|null
    */
    public function getTotalUsersCount(): ?int {
        $val = $this->getBackingStore()->get('totalUsersCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalUsersCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('compliantAdminsCount', $this->getCompliantAdminsCount());
        $writer->writeIntegerValue('compliantNonAdminsCount', $this->getCompliantNonAdminsCount());
        $writer->writeEnumValue('legacyPerUserMfaStatus', $this->getLegacyPerUserMfaStatus());
        $writer->writeEnumValue('mfaConditionalAccessPolicyStatus', $this->getMfaConditionalAccessPolicyStatus());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('securityDefaultsStatus', $this->getSecurityDefaultsStatus());
        $writer->writeIntegerValue('totalUsersCount', $this->getTotalUsersCount());
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
     * Sets the compliantAdminsCount property value. The number of admins that are compliant with the MFA requirements
     * @param int|null $value Value to set for the compliantAdminsCount property.
    */
    public function setCompliantAdminsCount(?int $value): void {
        $this->getBackingStore()->set('compliantAdminsCount', $value);
    }

    /**
     * Sets the compliantNonAdminsCount property value. The number of users that are compliant with the MFA requirements
     * @param int|null $value Value to set for the compliantNonAdminsCount property.
    */
    public function setCompliantNonAdminsCount(?int $value): void {
        $this->getBackingStore()->set('compliantNonAdminsCount', $value);
    }

    /**
     * Sets the legacyPerUserMfaStatus property value. The legacyPerUserMfaStatus property
     * @param PolicyStatus|null $value Value to set for the legacyPerUserMfaStatus property.
    */
    public function setLegacyPerUserMfaStatus(?PolicyStatus $value): void {
        $this->getBackingStore()->set('legacyPerUserMfaStatus', $value);
    }

    /**
     * Sets the mfaConditionalAccessPolicyStatus property value. The mfaConditionalAccessPolicyStatus property
     * @param PolicyStatus|null $value Value to set for the mfaConditionalAccessPolicyStatus property.
    */
    public function setMfaConditionalAccessPolicyStatus(?PolicyStatus $value): void {
        $this->getBackingStore()->set('mfaConditionalAccessPolicyStatus', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the securityDefaultsStatus property value. The securityDefaultsStatus property
     * @param PolicyStatus|null $value Value to set for the securityDefaultsStatus property.
    */
    public function setSecurityDefaultsStatus(?PolicyStatus $value): void {
        $this->getBackingStore()->set('securityDefaultsStatus', $value);
    }

    /**
     * Sets the totalUsersCount property value. The total number of users in the tenant
     * @param int|null $value Value to set for the totalUsersCount property.
    */
    public function setTotalUsersCount(?int $value): void {
        $this->getBackingStore()->set('totalUsersCount', $value);
    }

}
