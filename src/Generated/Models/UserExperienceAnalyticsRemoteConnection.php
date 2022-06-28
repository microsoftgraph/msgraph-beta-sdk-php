<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsRemoteConnection extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var float|null $cloudPcFailurePercentage The sign in failure percentage of Cloud PC Device. Valid values 0 to 100
    */
    private ?float $cloudPcFailurePercentage = null;
    
    /**
     * @var float|null $cloudPcRoundTripTime The round tip time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
    */
    private ?float $cloudPcRoundTripTime = null;
    
    /**
     * @var float|null $cloudPcSignInTime The sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
    */
    private ?float $cloudPcSignInTime = null;
    
    /**
     * @var float|null $coreBootTime The core boot time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
    */
    private ?float $coreBootTime = null;
    
    /**
     * @var float|null $coreSignInTime The core sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
    */
    private ?float $coreSignInTime = null;
    
    /**
     * @var int|null $deviceCount The count of remote connection. Valid values 0 to 2147483647
    */
    private ?int $deviceCount = null;
    
    /**
     * @var string|null $deviceId The id of the device.
    */
    private ?string $deviceId = null;
    
    /**
     * @var string|null $deviceName The name of the device.
    */
    private ?string $deviceName = null;
    
    /**
     * @var string|null $manufacturer The user experience analytics manufacturer.
    */
    private ?string $manufacturer = null;
    
    /**
     * @var string|null $model The user experience analytics device model.
    */
    private ?string $model = null;
    
    /**
     * @var float|null $remoteSignInTime The remote sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
    */
    private ?float $remoteSignInTime = null;
    
    /**
     * @var string|null $userPrincipalName The user experience analytics userPrincipalName.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * @var string|null $virtualNetwork The user experience analytics virtual network.
    */
    private ?string $virtualNetwork = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsRemoteConnection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsRemoteConnection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsRemoteConnection {
        return new UserExperienceAnalyticsRemoteConnection();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the cloudPcFailurePercentage property value. The sign in failure percentage of Cloud PC Device. Valid values 0 to 100
     * @return float|null
    */
    public function getCloudPcFailurePercentage(): ?float {
        return $this->cloudPcFailurePercentage;
    }

    /**
     * Gets the cloudPcRoundTripTime property value. The round tip time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @return float|null
    */
    public function getCloudPcRoundTripTime(): ?float {
        return $this->cloudPcRoundTripTime;
    }

    /**
     * Gets the cloudPcSignInTime property value. The sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @return float|null
    */
    public function getCloudPcSignInTime(): ?float {
        return $this->cloudPcSignInTime;
    }

    /**
     * Gets the coreBootTime property value. The core boot time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @return float|null
    */
    public function getCoreBootTime(): ?float {
        return $this->coreBootTime;
    }

    /**
     * Gets the coreSignInTime property value. The core sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @return float|null
    */
    public function getCoreSignInTime(): ?float {
        return $this->coreSignInTime;
    }

    /**
     * Gets the deviceCount property value. The count of remote connection. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getDeviceCount(): ?int {
        return $this->deviceCount;
    }

    /**
     * Gets the deviceId property value. The id of the device.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the deviceName property value. The name of the device.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cloudPcFailurePercentage' => function (ParseNode $n) use ($o) { $o->setCloudPcFailurePercentage($n->getFloatValue()); },
            'cloudPcRoundTripTime' => function (ParseNode $n) use ($o) { $o->setCloudPcRoundTripTime($n->getFloatValue()); },
            'cloudPcSignInTime' => function (ParseNode $n) use ($o) { $o->setCloudPcSignInTime($n->getFloatValue()); },
            'coreBootTime' => function (ParseNode $n) use ($o) { $o->setCoreBootTime($n->getFloatValue()); },
            'coreSignInTime' => function (ParseNode $n) use ($o) { $o->setCoreSignInTime($n->getFloatValue()); },
            'deviceCount' => function (ParseNode $n) use ($o) { $o->setDeviceCount($n->getIntegerValue()); },
            'deviceId' => function (ParseNode $n) use ($o) { $o->setDeviceId($n->getStringValue()); },
            'deviceName' => function (ParseNode $n) use ($o) { $o->setDeviceName($n->getStringValue()); },
            'manufacturer' => function (ParseNode $n) use ($o) { $o->setManufacturer($n->getStringValue()); },
            'model' => function (ParseNode $n) use ($o) { $o->setModel($n->getStringValue()); },
            'remoteSignInTime' => function (ParseNode $n) use ($o) { $o->setRemoteSignInTime($n->getFloatValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
            'virtualNetwork' => function (ParseNode $n) use ($o) { $o->setVirtualNetwork($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the manufacturer property value. The user experience analytics manufacturer.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
    }

    /**
     * Gets the model property value. The user experience analytics device model.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->model;
    }

    /**
     * Gets the remoteSignInTime property value. The remote sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @return float|null
    */
    public function getRemoteSignInTime(): ?float {
        return $this->remoteSignInTime;
    }

    /**
     * Gets the userPrincipalName property value. The user experience analytics userPrincipalName.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Gets the virtualNetwork property value. The user experience analytics virtual network.
     * @return string|null
    */
    public function getVirtualNetwork(): ?string {
        return $this->virtualNetwork;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeFloatValue('cloudPcFailurePercentage', $this->cloudPcFailurePercentage);
        $writer->writeFloatValue('cloudPcRoundTripTime', $this->cloudPcRoundTripTime);
        $writer->writeFloatValue('cloudPcSignInTime', $this->cloudPcSignInTime);
        $writer->writeFloatValue('coreBootTime', $this->coreBootTime);
        $writer->writeFloatValue('coreSignInTime', $this->coreSignInTime);
        $writer->writeIntegerValue('deviceCount', $this->deviceCount);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeStringValue('model', $this->model);
        $writer->writeFloatValue('remoteSignInTime', $this->remoteSignInTime);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
        $writer->writeStringValue('virtualNetwork', $this->virtualNetwork);
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
     * Sets the cloudPcFailurePercentage property value. The sign in failure percentage of Cloud PC Device. Valid values 0 to 100
     *  @param float|null $value Value to set for the cloudPcFailurePercentage property.
    */
    public function setCloudPcFailurePercentage(?float $value ): void {
        $this->cloudPcFailurePercentage = $value;
    }

    /**
     * Sets the cloudPcRoundTripTime property value. The round tip time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the cloudPcRoundTripTime property.
    */
    public function setCloudPcRoundTripTime(?float $value ): void {
        $this->cloudPcRoundTripTime = $value;
    }

    /**
     * Sets the cloudPcSignInTime property value. The sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the cloudPcSignInTime property.
    */
    public function setCloudPcSignInTime(?float $value ): void {
        $this->cloudPcSignInTime = $value;
    }

    /**
     * Sets the coreBootTime property value. The core boot time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the coreBootTime property.
    */
    public function setCoreBootTime(?float $value ): void {
        $this->coreBootTime = $value;
    }

    /**
     * Sets the coreSignInTime property value. The core sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the coreSignInTime property.
    */
    public function setCoreSignInTime(?float $value ): void {
        $this->coreSignInTime = $value;
    }

    /**
     * Sets the deviceCount property value. The count of remote connection. Valid values 0 to 2147483647
     *  @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value ): void {
        $this->deviceCount = $value;
    }

    /**
     * Sets the deviceId property value. The id of the device.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the deviceName property value. The name of the device.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the manufacturer property value. The user experience analytics manufacturer.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value ): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the model property value. The user experience analytics device model.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value ): void {
        $this->model = $value;
    }

    /**
     * Sets the remoteSignInTime property value. The remote sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the remoteSignInTime property.
    */
    public function setRemoteSignInTime(?float $value ): void {
        $this->remoteSignInTime = $value;
    }

    /**
     * Sets the userPrincipalName property value. The user experience analytics userPrincipalName.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

    /**
     * Sets the virtualNetwork property value. The user experience analytics virtual network.
     *  @param string|null $value Value to set for the virtualNetwork property.
    */
    public function setVirtualNetwork(?string $value ): void {
        $this->virtualNetwork = $value;
    }

}
