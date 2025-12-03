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

class CloudPCUserSettingsPersistenceProfile implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPCUserSettingsPersistenceProfile and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPCUserSettingsPersistenceProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPCUserSettingsPersistenceProfile {
        return new CloudPCUserSettingsPersistenceProfile();
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
            'lastProfileAttachedDateTime' => fn(ParseNode $n) => $o->setLastProfileAttachedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'profileId' => fn(ParseNode $n) => $o->setProfileId($n->getStringValue()),
            'profileSizeInGB' => fn(ParseNode $n) => $o->setProfileSizeInGB($n->getIntegerValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CloudPCUserSettingsPersistenceProfileStatus::class)),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ];
    }

    /**
     * Gets the lastProfileAttachedDateTime property value. The last time the user settings persistence profile was attached to the Cloud PC. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getLastProfileAttachedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastProfileAttachedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastProfileAttachedDateTime'");
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
     * Gets the profileId property value. Indicates the unique identifier of the Cloud PC user settings persistence profile for the selected Cloud PC user settings persistence. Required. Read-only.
     * @return string|null
    */
    public function getProfileId(): ?string {
        $val = $this->getBackingStore()->get('profileId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'profileId'");
    }

    /**
     * Gets the profileSizeInGB property value. Indicates the maximum allowed size in gigabytes of the cloud profile for a specific user. For example, 10 GB of allocated size returns 10 as a response. Required. Read-only.
     * @return int|null
    */
    public function getProfileSizeInGB(): ?int {
        $val = $this->getBackingStore()->get('profileSizeInGB');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'profileSizeInGB'");
    }

    /**
     * Gets the status property value. The status property
     * @return CloudPCUserSettingsPersistenceProfileStatus|null
    */
    public function getStatus(): ?CloudPCUserSettingsPersistenceProfileStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof CloudPCUserSettingsPersistenceProfileStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the userPrincipalName property value. The user principal name of the owner of the cloud profile. For example, connie@contoso.com. Required. Read-only.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('lastProfileAttachedDateTime', $this->getLastProfileAttachedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('profileId', $this->getProfileId());
        $writer->writeIntegerValue('profileSizeInGB', $this->getProfileSizeInGB());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
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
     * Sets the lastProfileAttachedDateTime property value. The last time the user settings persistence profile was attached to the Cloud PC. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the lastProfileAttachedDateTime property.
    */
    public function setLastProfileAttachedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastProfileAttachedDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the profileId property value. Indicates the unique identifier of the Cloud PC user settings persistence profile for the selected Cloud PC user settings persistence. Required. Read-only.
     * @param string|null $value Value to set for the profileId property.
    */
    public function setProfileId(?string $value): void {
        $this->getBackingStore()->set('profileId', $value);
    }

    /**
     * Sets the profileSizeInGB property value. Indicates the maximum allowed size in gigabytes of the cloud profile for a specific user. For example, 10 GB of allocated size returns 10 as a response. Required. Read-only.
     * @param int|null $value Value to set for the profileSizeInGB property.
    */
    public function setProfileSizeInGB(?int $value): void {
        $this->getBackingStore()->set('profileSizeInGB', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param CloudPCUserSettingsPersistenceProfileStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CloudPCUserSettingsPersistenceProfileStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the userPrincipalName property value. The user principal name of the owner of the cloud profile. For example, connie@contoso.com. Required. Read-only.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
