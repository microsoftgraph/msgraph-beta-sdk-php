<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RestrictedAppsViolation extends Entity implements Parsable 
{
    /**
     * @var string|null $deviceConfigurationId Device configuration profile unique identifier, must be Guid
    */
    private ?string $deviceConfigurationId = null;
    
    /**
     * @var string|null $deviceConfigurationName Device configuration profile name
    */
    private ?string $deviceConfigurationName = null;
    
    /**
     * @var string|null $deviceName Device name
    */
    private ?string $deviceName = null;
    
    /**
     * @var string|null $managedDeviceId Managed device unique identifier, must be Guid
    */
    private ?string $managedDeviceId = null;
    
    /**
     * @var PolicyPlatformType|null $platformType Platform type. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, windows10XProfile, androidAOSP, all.
    */
    private ?PolicyPlatformType $platformType = null;
    
    /**
     * @var array<ManagedDeviceReportedApp>|null $restrictedApps List of violated restricted apps
    */
    private ?array $restrictedApps = null;
    
    /**
     * @var RestrictedAppsState|null $restrictedAppsState Restricted apps state. Possible values are: prohibitedApps, notApprovedApps.
    */
    private ?RestrictedAppsState $restrictedAppsState = null;
    
    /**
     * @var string|null $userId User unique identifier, must be Guid
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $userName User name
    */
    private ?string $userName = null;
    
    /**
     * Instantiates a new RestrictedAppsViolation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RestrictedAppsViolation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RestrictedAppsViolation {
        return new RestrictedAppsViolation();
    }

    /**
     * Gets the deviceConfigurationId property value. Device configuration profile unique identifier, must be Guid
     * @return string|null
    */
    public function getDeviceConfigurationId(): ?string {
        return $this->deviceConfigurationId;
    }

    /**
     * Gets the deviceConfigurationName property value. Device configuration profile name
     * @return string|null
    */
    public function getDeviceConfigurationName(): ?string {
        return $this->deviceConfigurationName;
    }

    /**
     * Gets the deviceName property value. Device name
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
            'deviceConfigurationId' => function (ParseNode $n) use ($o) { $o->setDeviceConfigurationId($n->getStringValue()); },
            'deviceConfigurationName' => function (ParseNode $n) use ($o) { $o->setDeviceConfigurationName($n->getStringValue()); },
            'deviceName' => function (ParseNode $n) use ($o) { $o->setDeviceName($n->getStringValue()); },
            'managedDeviceId' => function (ParseNode $n) use ($o) { $o->setManagedDeviceId($n->getStringValue()); },
            'platformType' => function (ParseNode $n) use ($o) { $o->setPlatformType($n->getEnumValue(PolicyPlatformType::class)); },
            'restrictedApps' => function (ParseNode $n) use ($o) { $o->setRestrictedApps($n->getCollectionOfObjectValues(array(ManagedDeviceReportedApp::class, 'createFromDiscriminatorValue'))); },
            'restrictedAppsState' => function (ParseNode $n) use ($o) { $o->setRestrictedAppsState($n->getEnumValue(RestrictedAppsState::class)); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
            'userName' => function (ParseNode $n) use ($o) { $o->setUserName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the managedDeviceId property value. Managed device unique identifier, must be Guid
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->managedDeviceId;
    }

    /**
     * Gets the platformType property value. Platform type. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, windows10XProfile, androidAOSP, all.
     * @return PolicyPlatformType|null
    */
    public function getPlatformType(): ?PolicyPlatformType {
        return $this->platformType;
    }

    /**
     * Gets the restrictedApps property value. List of violated restricted apps
     * @return array<ManagedDeviceReportedApp>|null
    */
    public function getRestrictedApps(): ?array {
        return $this->restrictedApps;
    }

    /**
     * Gets the restrictedAppsState property value. Restricted apps state. Possible values are: prohibitedApps, notApprovedApps.
     * @return RestrictedAppsState|null
    */
    public function getRestrictedAppsState(): ?RestrictedAppsState {
        return $this->restrictedAppsState;
    }

    /**
     * Gets the userId property value. User unique identifier, must be Guid
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userName property value. User name
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->userName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceConfigurationId', $this->deviceConfigurationId);
        $writer->writeStringValue('deviceConfigurationName', $this->deviceConfigurationName);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeStringValue('managedDeviceId', $this->managedDeviceId);
        $writer->writeEnumValue('platformType', $this->platformType);
        $writer->writeCollectionOfObjectValues('restrictedApps', $this->restrictedApps);
        $writer->writeEnumValue('restrictedAppsState', $this->restrictedAppsState);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeStringValue('userName', $this->userName);
    }

    /**
     * Sets the deviceConfigurationId property value. Device configuration profile unique identifier, must be Guid
     *  @param string|null $value Value to set for the deviceConfigurationId property.
    */
    public function setDeviceConfigurationId(?string $value ): void {
        $this->deviceConfigurationId = $value;
    }

    /**
     * Sets the deviceConfigurationName property value. Device configuration profile name
     *  @param string|null $value Value to set for the deviceConfigurationName property.
    */
    public function setDeviceConfigurationName(?string $value ): void {
        $this->deviceConfigurationName = $value;
    }

    /**
     * Sets the deviceName property value. Device name
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the managedDeviceId property value. Managed device unique identifier, must be Guid
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value ): void {
        $this->managedDeviceId = $value;
    }

    /**
     * Sets the platformType property value. Platform type. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, windows10XProfile, androidAOSP, all.
     *  @param PolicyPlatformType|null $value Value to set for the platformType property.
    */
    public function setPlatformType(?PolicyPlatformType $value ): void {
        $this->platformType = $value;
    }

    /**
     * Sets the restrictedApps property value. List of violated restricted apps
     *  @param array<ManagedDeviceReportedApp>|null $value Value to set for the restrictedApps property.
    */
    public function setRestrictedApps(?array $value ): void {
        $this->restrictedApps = $value;
    }

    /**
     * Sets the restrictedAppsState property value. Restricted apps state. Possible values are: prohibitedApps, notApprovedApps.
     *  @param RestrictedAppsState|null $value Value to set for the restrictedAppsState property.
    */
    public function setRestrictedAppsState(?RestrictedAppsState $value ): void {
        $this->restrictedAppsState = $value;
    }

    /**
     * Sets the userId property value. User unique identifier, must be Guid
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the userName property value. User name
     *  @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value ): void {
        $this->userName = $value;
    }

}
