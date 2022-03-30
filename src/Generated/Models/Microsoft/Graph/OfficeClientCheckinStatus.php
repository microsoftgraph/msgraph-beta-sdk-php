<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OfficeClientCheckinStatus implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $appliedPolicies List of policies delivered to the device as last checkin. */
    private ?array $appliedPolicies = null;
    
    /** @var DateTime|null $checkinDateTime Last device check-in time in UTC. */
    private ?DateTime $checkinDateTime = null;
    
    /** @var string|null $deviceName Device name trying to check-in. */
    private ?string $deviceName = null;
    
    /** @var string|null $devicePlatform Device platform trying to check-in. */
    private ?string $devicePlatform = null;
    
    /** @var string|null $devicePlatformVersion Device platform version trying to check-in. */
    private ?string $devicePlatformVersion = null;
    
    /** @var string|null $errorMessage Error message if any associated for the last checkin. */
    private ?string $errorMessage = null;
    
    /** @var string|null $userId User identifier using the device. */
    private ?string $userId = null;
    
    /** @var string|null $userPrincipalName User principal name using the device. */
    private ?string $userPrincipalName = null;
    
    /** @var bool|null $wasSuccessful If the last checkin was successful. */
    private ?bool $wasSuccessful = null;
    
    /**
     * Instantiates a new officeClientCheckinStatus and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OfficeClientCheckinStatus
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): OfficeClientCheckinStatus {
        return new OfficeClientCheckinStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appliedPolicies property value. List of policies delivered to the device as last checkin.
     * @return array<string>|null
    */
    public function getAppliedPolicies(): ?array {
        return $this->appliedPolicies;
    }

    /**
     * Gets the checkinDateTime property value. Last device check-in time in UTC.
     * @return DateTime|null
    */
    public function getCheckinDateTime(): ?DateTime {
        return $this->checkinDateTime;
    }

    /**
     * Gets the deviceName property value. Device name trying to check-in.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * Gets the devicePlatform property value. Device platform trying to check-in.
     * @return string|null
    */
    public function getDevicePlatform(): ?string {
        return $this->devicePlatform;
    }

    /**
     * Gets the devicePlatformVersion property value. Device platform version trying to check-in.
     * @return string|null
    */
    public function getDevicePlatformVersion(): ?string {
        return $this->devicePlatformVersion;
    }

    /**
     * Gets the errorMessage property value. Error message if any associated for the last checkin.
     * @return string|null
    */
    public function getErrorMessage(): ?string {
        return $this->errorMessage;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'appliedPolicies' => function (self $o, ParseNode $n) { $o->setAppliedPolicies($n->getCollectionOfPrimitiveValues()); },
            'checkinDateTime' => function (self $o, ParseNode $n) { $o->setCheckinDateTime($n->getDateTimeValue()); },
            'deviceName' => function (self $o, ParseNode $n) { $o->setDeviceName($n->getStringValue()); },
            'devicePlatform' => function (self $o, ParseNode $n) { $o->setDevicePlatform($n->getStringValue()); },
            'devicePlatformVersion' => function (self $o, ParseNode $n) { $o->setDevicePlatformVersion($n->getStringValue()); },
            'errorMessage' => function (self $o, ParseNode $n) { $o->setErrorMessage($n->getStringValue()); },
            'userId' => function (self $o, ParseNode $n) { $o->setUserId($n->getStringValue()); },
            'userPrincipalName' => function (self $o, ParseNode $n) { $o->setUserPrincipalName($n->getStringValue()); },
            'wasSuccessful' => function (self $o, ParseNode $n) { $o->setWasSuccessful($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the userId property value. User identifier using the device.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userPrincipalName property value. User principal name using the device.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Gets the wasSuccessful property value. If the last checkin was successful.
     * @return bool|null
    */
    public function getWasSuccessful(): ?bool {
        return $this->wasSuccessful;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('appliedPolicies', $this->appliedPolicies);
        $writer->writeDateTimeValue('checkinDateTime', $this->checkinDateTime);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeStringValue('devicePlatform', $this->devicePlatform);
        $writer->writeStringValue('devicePlatformVersion', $this->devicePlatformVersion);
        $writer->writeStringValue('errorMessage', $this->errorMessage);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
        $writer->writeBooleanValue('wasSuccessful', $this->wasSuccessful);
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
     * Sets the appliedPolicies property value. List of policies delivered to the device as last checkin.
     *  @param array<string>|null $value Value to set for the appliedPolicies property.
    */
    public function setAppliedPolicies(?array $value ): void {
        $this->appliedPolicies = $value;
    }

    /**
     * Sets the checkinDateTime property value. Last device check-in time in UTC.
     *  @param DateTime|null $value Value to set for the checkinDateTime property.
    */
    public function setCheckinDateTime(?DateTime $value ): void {
        $this->checkinDateTime = $value;
    }

    /**
     * Sets the deviceName property value. Device name trying to check-in.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the devicePlatform property value. Device platform trying to check-in.
     *  @param string|null $value Value to set for the devicePlatform property.
    */
    public function setDevicePlatform(?string $value ): void {
        $this->devicePlatform = $value;
    }

    /**
     * Sets the devicePlatformVersion property value. Device platform version trying to check-in.
     *  @param string|null $value Value to set for the devicePlatformVersion property.
    */
    public function setDevicePlatformVersion(?string $value ): void {
        $this->devicePlatformVersion = $value;
    }

    /**
     * Sets the errorMessage property value. Error message if any associated for the last checkin.
     *  @param string|null $value Value to set for the errorMessage property.
    */
    public function setErrorMessage(?string $value ): void {
        $this->errorMessage = $value;
    }

    /**
     * Sets the userId property value. User identifier using the device.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the userPrincipalName property value. User principal name using the device.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

    /**
     * Sets the wasSuccessful property value. If the last checkin was successful.
     *  @param bool|null $value Value to set for the wasSuccessful property.
    */
    public function setWasSuccessful(?bool $value ): void {
        $this->wasSuccessful = $value;
    }

}
