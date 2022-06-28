<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EnrollmentTroubleshootingEvent extends DeviceManagementTroubleshootingEvent implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $deviceId Azure AD device identifier.
    */
    private ?string $deviceId = null;
    
    /**
     * @var DeviceEnrollmentType|null $enrollmentType Type of the enrollment. Possible values are: unknown, userEnrollment, deviceEnrollmentManager, appleBulkWithUser, appleBulkWithoutUser, windowsAzureADJoin, windowsBulkUserless, windowsAutoEnrollment, windowsBulkAzureDomainJoin, windowsCoManagement, windowsAzureADJoinUsingDeviceAuth, appleUserEnrollment, appleUserEnrollmentWithServiceAccount, azureAdJoinUsingAzureVmExtension, androidEnterpriseDedicatedDevice, androidEnterpriseFullyManaged, androidEnterpriseCorporateWorkProfile.
    */
    private ?DeviceEnrollmentType $enrollmentType = null;
    
    /**
     * @var DeviceEnrollmentFailureReason|null $failureCategory Highlevel failure category. Possible values are: unknown, authentication, authorization, accountValidation, userValidation, deviceNotSupported, inMaintenance, badRequest, featureNotSupported, enrollmentRestrictionsEnforced, clientDisconnected, userAbandonment.
    */
    private ?DeviceEnrollmentFailureReason $failureCategory = null;
    
    /**
     * @var string|null $failureReason Detailed failure reason.
    */
    private ?string $failureReason = null;
    
    /**
     * @var string|null $managedDeviceIdentifier Device identifier created or collected by Intune.
    */
    private ?string $managedDeviceIdentifier = null;
    
    /**
     * @var string|null $operatingSystem Operating System.
    */
    private ?string $operatingSystem = null;
    
    /**
     * @var string|null $osVersion OS Version.
    */
    private ?string $osVersion = null;
    
    /**
     * @var string|null $userId Identifier for the user that tried to enroll the device.
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new EnrollmentTroubleshootingEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EnrollmentTroubleshootingEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EnrollmentTroubleshootingEvent {
        return new EnrollmentTroubleshootingEvent();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceId property value. Azure AD device identifier.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the enrollmentType property value. Type of the enrollment. Possible values are: unknown, userEnrollment, deviceEnrollmentManager, appleBulkWithUser, appleBulkWithoutUser, windowsAzureADJoin, windowsBulkUserless, windowsAutoEnrollment, windowsBulkAzureDomainJoin, windowsCoManagement, windowsAzureADJoinUsingDeviceAuth, appleUserEnrollment, appleUserEnrollmentWithServiceAccount, azureAdJoinUsingAzureVmExtension, androidEnterpriseDedicatedDevice, androidEnterpriseFullyManaged, androidEnterpriseCorporateWorkProfile.
     * @return DeviceEnrollmentType|null
    */
    public function getEnrollmentType(): ?DeviceEnrollmentType {
        return $this->enrollmentType;
    }

    /**
     * Gets the failureCategory property value. Highlevel failure category. Possible values are: unknown, authentication, authorization, accountValidation, userValidation, deviceNotSupported, inMaintenance, badRequest, featureNotSupported, enrollmentRestrictionsEnforced, clientDisconnected, userAbandonment.
     * @return DeviceEnrollmentFailureReason|null
    */
    public function getFailureCategory(): ?DeviceEnrollmentFailureReason {
        return $this->failureCategory;
    }

    /**
     * Gets the failureReason property value. Detailed failure reason.
     * @return string|null
    */
    public function getFailureReason(): ?string {
        return $this->failureReason;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceId' => function (ParseNode $n) use ($o) { $o->setDeviceId($n->getStringValue()); },
            'enrollmentType' => function (ParseNode $n) use ($o) { $o->setEnrollmentType($n->getEnumValue(DeviceEnrollmentType::class)); },
            'failureCategory' => function (ParseNode $n) use ($o) { $o->setFailureCategory($n->getEnumValue(DeviceEnrollmentFailureReason::class)); },
            'failureReason' => function (ParseNode $n) use ($o) { $o->setFailureReason($n->getStringValue()); },
            'managedDeviceIdentifier' => function (ParseNode $n) use ($o) { $o->setManagedDeviceIdentifier($n->getStringValue()); },
            'operatingSystem' => function (ParseNode $n) use ($o) { $o->setOperatingSystem($n->getStringValue()); },
            'osVersion' => function (ParseNode $n) use ($o) { $o->setOsVersion($n->getStringValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the managedDeviceIdentifier property value. Device identifier created or collected by Intune.
     * @return string|null
    */
    public function getManagedDeviceIdentifier(): ?string {
        return $this->managedDeviceIdentifier;
    }

    /**
     * Gets the operatingSystem property value. Operating System.
     * @return string|null
    */
    public function getOperatingSystem(): ?string {
        return $this->operatingSystem;
    }

    /**
     * Gets the osVersion property value. OS Version.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->osVersion;
    }

    /**
     * Gets the userId property value. Identifier for the user that tried to enroll the device.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeEnumValue('enrollmentType', $this->enrollmentType);
        $writer->writeEnumValue('failureCategory', $this->failureCategory);
        $writer->writeStringValue('failureReason', $this->failureReason);
        $writer->writeStringValue('managedDeviceIdentifier', $this->managedDeviceIdentifier);
        $writer->writeStringValue('operatingSystem', $this->operatingSystem);
        $writer->writeStringValue('osVersion', $this->osVersion);
        $writer->writeStringValue('userId', $this->userId);
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
     * Sets the deviceId property value. Azure AD device identifier.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the enrollmentType property value. Type of the enrollment. Possible values are: unknown, userEnrollment, deviceEnrollmentManager, appleBulkWithUser, appleBulkWithoutUser, windowsAzureADJoin, windowsBulkUserless, windowsAutoEnrollment, windowsBulkAzureDomainJoin, windowsCoManagement, windowsAzureADJoinUsingDeviceAuth, appleUserEnrollment, appleUserEnrollmentWithServiceAccount, azureAdJoinUsingAzureVmExtension, androidEnterpriseDedicatedDevice, androidEnterpriseFullyManaged, androidEnterpriseCorporateWorkProfile.
     *  @param DeviceEnrollmentType|null $value Value to set for the enrollmentType property.
    */
    public function setEnrollmentType(?DeviceEnrollmentType $value ): void {
        $this->enrollmentType = $value;
    }

    /**
     * Sets the failureCategory property value. Highlevel failure category. Possible values are: unknown, authentication, authorization, accountValidation, userValidation, deviceNotSupported, inMaintenance, badRequest, featureNotSupported, enrollmentRestrictionsEnforced, clientDisconnected, userAbandonment.
     *  @param DeviceEnrollmentFailureReason|null $value Value to set for the failureCategory property.
    */
    public function setFailureCategory(?DeviceEnrollmentFailureReason $value ): void {
        $this->failureCategory = $value;
    }

    /**
     * Sets the failureReason property value. Detailed failure reason.
     *  @param string|null $value Value to set for the failureReason property.
    */
    public function setFailureReason(?string $value ): void {
        $this->failureReason = $value;
    }

    /**
     * Sets the managedDeviceIdentifier property value. Device identifier created or collected by Intune.
     *  @param string|null $value Value to set for the managedDeviceIdentifier property.
    */
    public function setManagedDeviceIdentifier(?string $value ): void {
        $this->managedDeviceIdentifier = $value;
    }

    /**
     * Sets the operatingSystem property value. Operating System.
     *  @param string|null $value Value to set for the operatingSystem property.
    */
    public function setOperatingSystem(?string $value ): void {
        $this->operatingSystem = $value;
    }

    /**
     * Sets the osVersion property value. OS Version.
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value ): void {
        $this->osVersion = $value;
    }

    /**
     * Sets the userId property value. Identifier for the user that tried to enroll the device.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
