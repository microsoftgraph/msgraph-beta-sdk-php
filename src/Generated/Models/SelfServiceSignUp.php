<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SelfServiceSignUp extends Entity implements Parsable 
{
    /**
     * Instantiates a new SelfServiceSignUp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SelfServiceSignUp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SelfServiceSignUp {
        return new SelfServiceSignUp();
    }

    /**
     * Gets the appDisplayName property value. App name displayed in the Microsoft Entra admin center.  Supports $filter (eq, startsWith).
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        $val = $this->getBackingStore()->get('appDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appDisplayName'");
    }

    /**
     * Gets the appId property value. Unique GUID that represents the app ID in the Microsoft Entra ID.  Supports $filter (eq).
     * @return string|null
    */
    public function getAppId(): ?string {
        $val = $this->getBackingStore()->get('appId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appId'");
    }

    /**
     * Gets the appliedEventListeners property value. Detailed information about the listeners, such as Azure Logic Apps and Azure Functions, which the corresponding events in the sign-up event triggered.
     * @return array<AppliedAuthenticationEventListener>|null
    */
    public function getAppliedEventListeners(): ?array {
        $val = $this->getBackingStore()->get('appliedEventListeners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppliedAuthenticationEventListener::class);
            /** @var array<AppliedAuthenticationEventListener>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliedEventListeners'");
    }

    /**
     * Gets the correlationId property value. The request ID sent from the client when the sign-up is initiated. Used to troubleshoot sign-up activity.  Supports $filter (eq).
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        $val = $this->getBackingStore()->get('correlationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'correlationId'");
    }

    /**
     * Gets the createdDateTime property value. Date and time (UTC) the sign-up was initiated. Example: midnight on Jan 1, 2014 is reported as 2014-01-01T00:00:00Z.  Supports $orderby, $filter (eq, le, and ge).
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appDisplayName' => fn(ParseNode $n) => $o->setAppDisplayName($n->getStringValue()),
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'appliedEventListeners' => fn(ParseNode $n) => $o->setAppliedEventListeners($n->getCollectionOfObjectValues([AppliedAuthenticationEventListener::class, 'createFromDiscriminatorValue'])),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'signUpIdentity' => fn(ParseNode $n) => $o->setSignUpIdentity($n->getObjectValue([SignUpIdentity::class, 'createFromDiscriminatorValue'])),
            'signUpIdentityProvider' => fn(ParseNode $n) => $o->setSignUpIdentityProvider($n->getStringValue()),
            'signUpStage' => fn(ParseNode $n) => $o->setSignUpStage($n->getEnumValue(SignUpStage::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getObjectValue([SignUpStatus::class, 'createFromDiscriminatorValue'])),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the signUpIdentity property value. Unique identifier for self-service sign-up user. Supports $filter (eq) on the signUpIdentifierType.
     * @return SignUpIdentity|null
    */
    public function getSignUpIdentity(): ?SignUpIdentity {
        $val = $this->getBackingStore()->get('signUpIdentity');
        if (is_null($val) || $val instanceof SignUpIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signUpIdentity'");
    }

    /**
     * Gets the signUpIdentityProvider property value. Describes the type of account for which the user registered. Values include Email OTP, Email Password, Google.
     * @return string|null
    */
    public function getSignUpIdentityProvider(): ?string {
        $val = $this->getBackingStore()->get('signUpIdentityProvider');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signUpIdentityProvider'");
    }

    /**
     * Gets the signUpStage property value. The signUpStage property
     * @return SignUpStage|null
    */
    public function getSignUpStage(): ?SignUpStage {
        $val = $this->getBackingStore()->get('signUpStage');
        if (is_null($val) || $val instanceof SignUpStage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signUpStage'");
    }

    /**
     * Gets the status property value. Sign-up status. Includes the error code and description of the error (if a sign-up failure or interrupt occurs).  Supports $filter (eq) on errorCode property.
     * @return SignUpStatus|null
    */
    public function getStatus(): ?SignUpStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof SignUpStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the userId property value. The identifier of the user object created during the sign-up.
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appDisplayName', $this->getAppDisplayName());
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeCollectionOfObjectValues('appliedEventListeners', $this->getAppliedEventListeners());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('signUpIdentity', $this->getSignUpIdentity());
        $writer->writeStringValue('signUpIdentityProvider', $this->getSignUpIdentityProvider());
        $writer->writeEnumValue('signUpStage', $this->getSignUpStage());
        $writer->writeObjectValue('status', $this->getStatus());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the appDisplayName property value. App name displayed in the Microsoft Entra admin center.  Supports $filter (eq, startsWith).
     * @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('appDisplayName', $value);
    }

    /**
     * Sets the appId property value. Unique GUID that represents the app ID in the Microsoft Entra ID.  Supports $filter (eq).
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the appliedEventListeners property value. Detailed information about the listeners, such as Azure Logic Apps and Azure Functions, which the corresponding events in the sign-up event triggered.
     * @param array<AppliedAuthenticationEventListener>|null $value Value to set for the appliedEventListeners property.
    */
    public function setAppliedEventListeners(?array $value): void {
        $this->getBackingStore()->set('appliedEventListeners', $value);
    }

    /**
     * Sets the correlationId property value. The request ID sent from the client when the sign-up is initiated. Used to troubleshoot sign-up activity.  Supports $filter (eq).
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->getBackingStore()->set('correlationId', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time (UTC) the sign-up was initiated. Example: midnight on Jan 1, 2014 is reported as 2014-01-01T00:00:00Z.  Supports $orderby, $filter (eq, le, and ge).
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the signUpIdentity property value. Unique identifier for self-service sign-up user. Supports $filter (eq) on the signUpIdentifierType.
     * @param SignUpIdentity|null $value Value to set for the signUpIdentity property.
    */
    public function setSignUpIdentity(?SignUpIdentity $value): void {
        $this->getBackingStore()->set('signUpIdentity', $value);
    }

    /**
     * Sets the signUpIdentityProvider property value. Describes the type of account for which the user registered. Values include Email OTP, Email Password, Google.
     * @param string|null $value Value to set for the signUpIdentityProvider property.
    */
    public function setSignUpIdentityProvider(?string $value): void {
        $this->getBackingStore()->set('signUpIdentityProvider', $value);
    }

    /**
     * Sets the signUpStage property value. The signUpStage property
     * @param SignUpStage|null $value Value to set for the signUpStage property.
    */
    public function setSignUpStage(?SignUpStage $value): void {
        $this->getBackingStore()->set('signUpStage', $value);
    }

    /**
     * Sets the status property value. Sign-up status. Includes the error code and description of the error (if a sign-up failure or interrupt occurs).  Supports $filter (eq) on errorCode property.
     * @param SignUpStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SignUpStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the userId property value. The identifier of the user object created during the sign-up.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
