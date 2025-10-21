<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserCredentialUsageDetails extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserCredentialUsageDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserCredentialUsageDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserCredentialUsageDetails {
        return new UserCredentialUsageDetails();
    }

    /**
     * Gets the authMethod property value. The authMethod property
     * @return UsageAuthMethod|null
    */
    public function getAuthMethod(): ?UsageAuthMethod {
        $val = $this->getBackingStore()->get('authMethod');
        if (is_null($val) || $val instanceof UsageAuthMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authMethod'");
    }

    /**
     * Gets the eventDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('eventDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventDateTime'");
    }

    /**
     * Gets the failureReason property value. Provides the failure reason for the corresponding reset or registration workflow.
     * @return string|null
    */
    public function getFailureReason(): ?string {
        $val = $this->getBackingStore()->get('failureReason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failureReason'");
    }

    /**
     * Gets the feature property value. The feature property
     * @return FeatureType|null
    */
    public function getFeature(): ?FeatureType {
        $val = $this->getBackingStore()->get('feature');
        if (is_null($val) || $val instanceof FeatureType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'feature'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authMethod' => fn(ParseNode $n) => $o->setAuthMethod($n->getEnumValue(UsageAuthMethod::class)),
            'eventDateTime' => fn(ParseNode $n) => $o->setEventDateTime($n->getDateTimeValue()),
            'failureReason' => fn(ParseNode $n) => $o->setFailureReason($n->getStringValue()),
            'feature' => fn(ParseNode $n) => $o->setFeature($n->getEnumValue(FeatureType::class)),
            'isSuccess' => fn(ParseNode $n) => $o->setIsSuccess($n->getBooleanValue()),
            'userDisplayName' => fn(ParseNode $n) => $o->setUserDisplayName($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isSuccess property value. Indicates success or failure of the workflow.
     * @return bool|null
    */
    public function getIsSuccess(): ?bool {
        $val = $this->getBackingStore()->get('isSuccess');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSuccess'");
    }

    /**
     * Gets the userDisplayName property value. User name of the user performing the reset or registration workflow.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        $val = $this->getBackingStore()->get('userDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userDisplayName'");
    }

    /**
     * Gets the userPrincipalName property value. User principal name of the user performing the reset or registration workflow.
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
        parent::serialize($writer);
        $writer->writeEnumValue('authMethod', $this->getAuthMethod());
        $writer->writeDateTimeValue('eventDateTime', $this->getEventDateTime());
        $writer->writeStringValue('failureReason', $this->getFailureReason());
        $writer->writeEnumValue('feature', $this->getFeature());
        $writer->writeBooleanValue('isSuccess', $this->getIsSuccess());
        $writer->writeStringValue('userDisplayName', $this->getUserDisplayName());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the authMethod property value. The authMethod property
     * @param UsageAuthMethod|null $value Value to set for the authMethod property.
    */
    public function setAuthMethod(?UsageAuthMethod $value): void {
        $this->getBackingStore()->set('authMethod', $value);
    }

    /**
     * Sets the eventDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('eventDateTime', $value);
    }

    /**
     * Sets the failureReason property value. Provides the failure reason for the corresponding reset or registration workflow.
     * @param string|null $value Value to set for the failureReason property.
    */
    public function setFailureReason(?string $value): void {
        $this->getBackingStore()->set('failureReason', $value);
    }

    /**
     * Sets the feature property value. The feature property
     * @param FeatureType|null $value Value to set for the feature property.
    */
    public function setFeature(?FeatureType $value): void {
        $this->getBackingStore()->set('feature', $value);
    }

    /**
     * Sets the isSuccess property value. Indicates success or failure of the workflow.
     * @param bool|null $value Value to set for the isSuccess property.
    */
    public function setIsSuccess(?bool $value): void {
        $this->getBackingStore()->set('isSuccess', $value);
    }

    /**
     * Sets the userDisplayName property value. User name of the user performing the reset or registration workflow.
     * @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value): void {
        $this->getBackingStore()->set('userDisplayName', $value);
    }

    /**
     * Sets the userPrincipalName property value. User principal name of the user performing the reset or registration workflow.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
