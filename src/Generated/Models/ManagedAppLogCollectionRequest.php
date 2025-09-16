<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The Managed App log collection response
*/
class ManagedAppLogCollectionRequest extends Entity implements Parsable 
{
    /**
     * Instantiates a new ManagedAppLogCollectionRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedAppLogCollectionRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedAppLogCollectionRequest {
        return new ManagedAppLogCollectionRequest();
    }

    /**
     * Gets the completedDateTime property value. DateTime of when the log upload request was completed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-only.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('completedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'managedAppRegistrationId' => fn(ParseNode $n) => $o->setManagedAppRegistrationId($n->getStringValue()),
            'requestedByUserPrincipalName' => fn(ParseNode $n) => $o->setRequestedByUserPrincipalName($n->getStringValue()),
            'requestedDateTime' => fn(ParseNode $n) => $o->setRequestedDateTime($n->getDateTimeValue()),
            'uploadedLogs' => fn(ParseNode $n) => $o->setUploadedLogs($n->getCollectionOfObjectValues([ManagedAppLogUpload::class, 'createFromDiscriminatorValue'])),
            'userLogUploadConsent' => fn(ParseNode $n) => $o->setUserLogUploadConsent($n->getEnumValue(ManagedAppLogUploadConsent::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the managedAppRegistrationId property value. The unique identifier of the app instance for which diagnostic logs were collected. Read-only.
     * @return string|null
    */
    public function getManagedAppRegistrationId(): ?string {
        $val = $this->getBackingStore()->get('managedAppRegistrationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedAppRegistrationId'");
    }

    /**
     * Gets the requestedByUserPrincipalName property value. The user principal name associated with the request for the managed application log collection. Read-only.
     * @return string|null
    */
    public function getRequestedByUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('requestedByUserPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestedByUserPrincipalName'");
    }

    /**
     * Gets the requestedDateTime property value. DateTime of when the log upload request was received. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-only.
     * @return DateTime|null
    */
    public function getRequestedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('requestedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestedDateTime'");
    }

    /**
     * Gets the uploadedLogs property value. The collection of log upload results as reported by each component on the device. Such components can be the application itself, the Mobile Application Management (MAM) SDK, and other on-device components that are requested to upload diagnostic logs. Read-only.
     * @return array<ManagedAppLogUpload>|null
    */
    public function getUploadedLogs(): ?array {
        $val = $this->getBackingStore()->get('uploadedLogs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedAppLogUpload::class);
            /** @var array<ManagedAppLogUpload>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uploadedLogs'");
    }

    /**
     * Gets the userLogUploadConsent property value. Represents the current consent status of the associated `managedAppLogCollectionRequest`.
     * @return ManagedAppLogUploadConsent|null
    */
    public function getUserLogUploadConsent(): ?ManagedAppLogUploadConsent {
        $val = $this->getBackingStore()->get('userLogUploadConsent');
        if (is_null($val) || $val instanceof ManagedAppLogUploadConsent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userLogUploadConsent'");
    }

    /**
     * Gets the version property value. Version of the entity.
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeStringValue('managedAppRegistrationId', $this->getManagedAppRegistrationId());
        $writer->writeStringValue('requestedByUserPrincipalName', $this->getRequestedByUserPrincipalName());
        $writer->writeDateTimeValue('requestedDateTime', $this->getRequestedDateTime());
        $writer->writeCollectionOfObjectValues('uploadedLogs', $this->getUploadedLogs());
        $writer->writeEnumValue('userLogUploadConsent', $this->getUserLogUploadConsent());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the completedDateTime property value. DateTime of when the log upload request was completed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-only.
     * @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the managedAppRegistrationId property value. The unique identifier of the app instance for which diagnostic logs were collected. Read-only.
     * @param string|null $value Value to set for the managedAppRegistrationId property.
    */
    public function setManagedAppRegistrationId(?string $value): void {
        $this->getBackingStore()->set('managedAppRegistrationId', $value);
    }

    /**
     * Sets the requestedByUserPrincipalName property value. The user principal name associated with the request for the managed application log collection. Read-only.
     * @param string|null $value Value to set for the requestedByUserPrincipalName property.
    */
    public function setRequestedByUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('requestedByUserPrincipalName', $value);
    }

    /**
     * Sets the requestedDateTime property value. DateTime of when the log upload request was received. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-only.
     * @param DateTime|null $value Value to set for the requestedDateTime property.
    */
    public function setRequestedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('requestedDateTime', $value);
    }

    /**
     * Sets the uploadedLogs property value. The collection of log upload results as reported by each component on the device. Such components can be the application itself, the Mobile Application Management (MAM) SDK, and other on-device components that are requested to upload diagnostic logs. Read-only.
     * @param array<ManagedAppLogUpload>|null $value Value to set for the uploadedLogs property.
    */
    public function setUploadedLogs(?array $value): void {
        $this->getBackingStore()->set('uploadedLogs', $value);
    }

    /**
     * Sets the userLogUploadConsent property value. Represents the current consent status of the associated `managedAppLogCollectionRequest`.
     * @param ManagedAppLogUploadConsent|null $value Value to set for the userLogUploadConsent property.
    */
    public function setUserLogUploadConsent(?ManagedAppLogUploadConsent $value): void {
        $this->getBackingStore()->set('userLogUploadConsent', $value);
    }

    /**
     * Sets the version property value. Version of the entity.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
