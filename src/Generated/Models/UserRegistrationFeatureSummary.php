<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UserRegistrationFeatureSummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UserRegistrationFeatureSummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserRegistrationFeatureSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserRegistrationFeatureSummary {
        return new UserRegistrationFeatureSummary();
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'totalUserCount' => fn(ParseNode $n) => $o->setTotalUserCount($n->getIntegerValue()),
            'userRegistrationFeatureCounts' => fn(ParseNode $n) => $o->setUserRegistrationFeatureCounts($n->getCollectionOfObjectValues([UserRegistrationFeatureCount::class, 'createFromDiscriminatorValue'])),
            'userRoles' => fn(ParseNode $n) => $o->setUserRoles($n->getEnumValue(IncludedUserRoles::class)),
            'userTypes' => fn(ParseNode $n) => $o->setUserTypes($n->getEnumValue(IncludedUserTypes::class)),
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
     * Gets the totalUserCount property value. Total number of users accounts, excluding those that are blocked
     * @return int|null
    */
    public function getTotalUserCount(): ?int {
        return $this->getBackingStore()->get('totalUserCount');
    }

    /**
     * Gets the userRegistrationFeatureCounts property value. Number of users registered or capable for Multi-Factor Authentication, Self-Service Password Reset and Passwordless Authentication.
     * @return array<UserRegistrationFeatureCount>|null
    */
    public function getUserRegistrationFeatureCounts(): ?array {
        return $this->getBackingStore()->get('userRegistrationFeatureCounts');
    }

    /**
     * Gets the userRoles property value. User role type. Possible values are: all, privilegedAdmin, admin, user.
     * @return IncludedUserRoles|null
    */
    public function getUserRoles(): ?IncludedUserRoles {
        return $this->getBackingStore()->get('userRoles');
    }

    /**
     * Gets the userTypes property value. User type. Possible values are: all, member, guest.
     * @return IncludedUserTypes|null
    */
    public function getUserTypes(): ?IncludedUserTypes {
        return $this->getBackingStore()->get('userTypes');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('totalUserCount', $this->getTotalUserCount());
        $writer->writeCollectionOfObjectValues('userRegistrationFeatureCounts', $this->getUserRegistrationFeatureCounts());
        $writer->writeEnumValue('userRoles', $this->getUserRoles());
        $writer->writeEnumValue('userTypes', $this->getUserTypes());
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the totalUserCount property value. Total number of users accounts, excluding those that are blocked
     * @param int|null $value Value to set for the totalUserCount property.
    */
    public function setTotalUserCount(?int $value): void {
        $this->getBackingStore()->set('totalUserCount', $value);
    }

    /**
     * Sets the userRegistrationFeatureCounts property value. Number of users registered or capable for Multi-Factor Authentication, Self-Service Password Reset and Passwordless Authentication.
     * @param array<UserRegistrationFeatureCount>|null $value Value to set for the userRegistrationFeatureCounts property.
    */
    public function setUserRegistrationFeatureCounts(?array $value): void {
        $this->getBackingStore()->set('userRegistrationFeatureCounts', $value);
    }

    /**
     * Sets the userRoles property value. User role type. Possible values are: all, privilegedAdmin, admin, user.
     * @param IncludedUserRoles|null $value Value to set for the userRoles property.
    */
    public function setUserRoles(?IncludedUserRoles $value): void {
        $this->getBackingStore()->set('userRoles', $value);
    }

    /**
     * Sets the userTypes property value. User type. Possible values are: all, member, guest.
     * @param IncludedUserTypes|null $value Value to set for the userTypes property.
    */
    public function setUserTypes(?IncludedUserTypes $value): void {
        $this->getBackingStore()->set('userTypes', $value);
    }

}
