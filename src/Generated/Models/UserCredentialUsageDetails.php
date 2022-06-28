<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserCredentialUsageDetails extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var UsageAuthMethod|null $authMethod Represents the authentication method that the user used. Possible values are:email, mobileSMS, mobileCall, officePhone, securityQuestion (only used for self-service password reset), appNotification, appCode, alternateMobileCall (supported only in registration), fido, appPassword,unknownFutureValue
    */
    private ?UsageAuthMethod $authMethod = null;
    
    /**
     * @var DateTime|null $eventDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $eventDateTime = null;
    
    /**
     * @var string|null $failureReason Provides the failure reason for the corresponding reset or registration workflow.
    */
    private ?string $failureReason = null;
    
    /**
     * @var FeatureType|null $feature Possible values are: registration, reset, unknownFutureValue.
    */
    private ?FeatureType $feature = null;
    
    /**
     * @var bool|null $isSuccess Indicates success or failure of the workflow.
    */
    private ?bool $isSuccess = null;
    
    /**
     * @var string|null $userDisplayName User name of the user performing the reset or registration workflow.
    */
    private ?string $userDisplayName = null;
    
    /**
     * @var string|null $userPrincipalName User principal name of the user performing the reset or registration workflow.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new userCredentialUsageDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the authMethod property value. Represents the authentication method that the user used. Possible values are:email, mobileSMS, mobileCall, officePhone, securityQuestion (only used for self-service password reset), appNotification, appCode, alternateMobileCall (supported only in registration), fido, appPassword,unknownFutureValue
     * @return UsageAuthMethod|null
    */
    public function getAuthMethod(): ?UsageAuthMethod {
        return $this->authMethod;
    }

    /**
     * Gets the eventDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        return $this->eventDateTime;
    }

    /**
     * Gets the failureReason property value. Provides the failure reason for the corresponding reset or registration workflow.
     * @return string|null
    */
    public function getFailureReason(): ?string {
        return $this->failureReason;
    }

    /**
     * Gets the feature property value. Possible values are: registration, reset, unknownFutureValue.
     * @return FeatureType|null
    */
    public function getFeature(): ?FeatureType {
        return $this->feature;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authMethod' => function (ParseNode $n) use ($o) { $o->setAuthMethod($n->getEnumValue(UsageAuthMethod::class)); },
            'eventDateTime' => function (ParseNode $n) use ($o) { $o->setEventDateTime($n->getDateTimeValue()); },
            'failureReason' => function (ParseNode $n) use ($o) { $o->setFailureReason($n->getStringValue()); },
            'feature' => function (ParseNode $n) use ($o) { $o->setFeature($n->getEnumValue(FeatureType::class)); },
            'isSuccess' => function (ParseNode $n) use ($o) { $o->setIsSuccess($n->getBooleanValue()); },
            'userDisplayName' => function (ParseNode $n) use ($o) { $o->setUserDisplayName($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isSuccess property value. Indicates success or failure of the workflow.
     * @return bool|null
    */
    public function getIsSuccess(): ?bool {
        return $this->isSuccess;
    }

    /**
     * Gets the userDisplayName property value. User name of the user performing the reset or registration workflow.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->userDisplayName;
    }

    /**
     * Gets the userPrincipalName property value. User principal name of the user performing the reset or registration workflow.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('authMethod', $this->authMethod);
        $writer->writeDateTimeValue('eventDateTime', $this->eventDateTime);
        $writer->writeStringValue('failureReason', $this->failureReason);
        $writer->writeEnumValue('feature', $this->feature);
        $writer->writeBooleanValue('isSuccess', $this->isSuccess);
        $writer->writeStringValue('userDisplayName', $this->userDisplayName);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the authMethod property value. Represents the authentication method that the user used. Possible values are:email, mobileSMS, mobileCall, officePhone, securityQuestion (only used for self-service password reset), appNotification, appCode, alternateMobileCall (supported only in registration), fido, appPassword,unknownFutureValue
     *  @param UsageAuthMethod|null $value Value to set for the authMethod property.
    */
    public function setAuthMethod(?UsageAuthMethod $value ): void {
        $this->authMethod = $value;
    }

    /**
     * Sets the eventDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value ): void {
        $this->eventDateTime = $value;
    }

    /**
     * Sets the failureReason property value. Provides the failure reason for the corresponding reset or registration workflow.
     *  @param string|null $value Value to set for the failureReason property.
    */
    public function setFailureReason(?string $value ): void {
        $this->failureReason = $value;
    }

    /**
     * Sets the feature property value. Possible values are: registration, reset, unknownFutureValue.
     *  @param FeatureType|null $value Value to set for the feature property.
    */
    public function setFeature(?FeatureType $value ): void {
        $this->feature = $value;
    }

    /**
     * Sets the isSuccess property value. Indicates success or failure of the workflow.
     *  @param bool|null $value Value to set for the isSuccess property.
    */
    public function setIsSuccess(?bool $value ): void {
        $this->isSuccess = $value;
    }

    /**
     * Sets the userDisplayName property value. User name of the user performing the reset or registration workflow.
     *  @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value ): void {
        $this->userDisplayName = $value;
    }

    /**
     * Sets the userPrincipalName property value. User principal name of the user performing the reset or registration workflow.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
