<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecurityConfigurationTask extends DeviceAppManagementTask implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var EndpointSecurityConfigurationApplicablePlatform|null $applicablePlatform The applicable platform. Possible values are: unknown, macOS, windows10AndLater, windows10AndWindowsServer.
    */
    private ?EndpointSecurityConfigurationApplicablePlatform $applicablePlatform = null;
    
    /**
     * @var EndpointSecurityConfigurationType|null $endpointSecurityPolicy The endpoint security policy type. Possible values are: unknown, antivirus, diskEncryption, firewall, endpointDetectionAndResponse, attackSurfaceReduction, accountProtection.
    */
    private ?EndpointSecurityConfigurationType $endpointSecurityPolicy = null;
    
    /**
     * @var EndpointSecurityConfigurationProfileType|null $endpointSecurityPolicyProfile The endpoint security policy profile. Possible values are: unknown, antivirus, windowsSecurity, bitLocker, fileVault, firewall, firewallRules, endpointDetectionAndResponse, deviceControl, appAndBrowserIsolation, exploitProtection, webProtection, applicationControl, attackSurfaceReductionRules, accountProtection.
    */
    private ?EndpointSecurityConfigurationProfileType $endpointSecurityPolicyProfile = null;
    
    /**
     * @var string|null $insights Information about the mitigation.
    */
    private ?string $insights = null;
    
    /**
     * @var array<KeyValuePair>|null $intendedSettings The intended settings and their values.
    */
    private ?array $intendedSettings = null;
    
    /**
     * @var int|null $managedDeviceCount The number of vulnerable devices.
    */
    private ?int $managedDeviceCount = null;
    
    /**
     * @var array<VulnerableManagedDevice>|null $managedDevices The vulnerable managed devices.
    */
    private ?array $managedDevices = null;
    
    /**
     * Instantiates a new SecurityConfigurationTask and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityConfigurationTask
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecurityConfigurationTask {
        return new SecurityConfigurationTask();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applicablePlatform property value. The applicable platform. Possible values are: unknown, macOS, windows10AndLater, windows10AndWindowsServer.
     * @return EndpointSecurityConfigurationApplicablePlatform|null
    */
    public function getApplicablePlatform(): ?EndpointSecurityConfigurationApplicablePlatform {
        return $this->applicablePlatform;
    }

    /**
     * Gets the endpointSecurityPolicy property value. The endpoint security policy type. Possible values are: unknown, antivirus, diskEncryption, firewall, endpointDetectionAndResponse, attackSurfaceReduction, accountProtection.
     * @return EndpointSecurityConfigurationType|null
    */
    public function getEndpointSecurityPolicy(): ?EndpointSecurityConfigurationType {
        return $this->endpointSecurityPolicy;
    }

    /**
     * Gets the endpointSecurityPolicyProfile property value. The endpoint security policy profile. Possible values are: unknown, antivirus, windowsSecurity, bitLocker, fileVault, firewall, firewallRules, endpointDetectionAndResponse, deviceControl, appAndBrowserIsolation, exploitProtection, webProtection, applicationControl, attackSurfaceReductionRules, accountProtection.
     * @return EndpointSecurityConfigurationProfileType|null
    */
    public function getEndpointSecurityPolicyProfile(): ?EndpointSecurityConfigurationProfileType {
        return $this->endpointSecurityPolicyProfile;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicablePlatform' => function (ParseNode $n) use ($o) { $o->setApplicablePlatform($n->getEnumValue(EndpointSecurityConfigurationApplicablePlatform::class)); },
            'endpointSecurityPolicy' => function (ParseNode $n) use ($o) { $o->setEndpointSecurityPolicy($n->getEnumValue(EndpointSecurityConfigurationType::class)); },
            'endpointSecurityPolicyProfile' => function (ParseNode $n) use ($o) { $o->setEndpointSecurityPolicyProfile($n->getEnumValue(EndpointSecurityConfigurationProfileType::class)); },
            'insights' => function (ParseNode $n) use ($o) { $o->setInsights($n->getStringValue()); },
            'intendedSettings' => function (ParseNode $n) use ($o) { $o->setIntendedSettings($n->getCollectionOfObjectValues(array(KeyValuePair::class, 'createFromDiscriminatorValue'))); },
            'managedDeviceCount' => function (ParseNode $n) use ($o) { $o->setManagedDeviceCount($n->getIntegerValue()); },
            'managedDevices' => function (ParseNode $n) use ($o) { $o->setManagedDevices($n->getCollectionOfObjectValues(array(VulnerableManagedDevice::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the insights property value. Information about the mitigation.
     * @return string|null
    */
    public function getInsights(): ?string {
        return $this->insights;
    }

    /**
     * Gets the intendedSettings property value. The intended settings and their values.
     * @return array<KeyValuePair>|null
    */
    public function getIntendedSettings(): ?array {
        return $this->intendedSettings;
    }

    /**
     * Gets the managedDeviceCount property value. The number of vulnerable devices.
     * @return int|null
    */
    public function getManagedDeviceCount(): ?int {
        return $this->managedDeviceCount;
    }

    /**
     * Gets the managedDevices property value. The vulnerable managed devices.
     * @return array<VulnerableManagedDevice>|null
    */
    public function getManagedDevices(): ?array {
        return $this->managedDevices;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('applicablePlatform', $this->applicablePlatform);
        $writer->writeEnumValue('endpointSecurityPolicy', $this->endpointSecurityPolicy);
        $writer->writeEnumValue('endpointSecurityPolicyProfile', $this->endpointSecurityPolicyProfile);
        $writer->writeStringValue('insights', $this->insights);
        $writer->writeCollectionOfObjectValues('intendedSettings', $this->intendedSettings);
        $writer->writeIntegerValue('managedDeviceCount', $this->managedDeviceCount);
        $writer->writeCollectionOfObjectValues('managedDevices', $this->managedDevices);
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
     * Sets the applicablePlatform property value. The applicable platform. Possible values are: unknown, macOS, windows10AndLater, windows10AndWindowsServer.
     *  @param EndpointSecurityConfigurationApplicablePlatform|null $value Value to set for the applicablePlatform property.
    */
    public function setApplicablePlatform(?EndpointSecurityConfigurationApplicablePlatform $value ): void {
        $this->applicablePlatform = $value;
    }

    /**
     * Sets the endpointSecurityPolicy property value. The endpoint security policy type. Possible values are: unknown, antivirus, diskEncryption, firewall, endpointDetectionAndResponse, attackSurfaceReduction, accountProtection.
     *  @param EndpointSecurityConfigurationType|null $value Value to set for the endpointSecurityPolicy property.
    */
    public function setEndpointSecurityPolicy(?EndpointSecurityConfigurationType $value ): void {
        $this->endpointSecurityPolicy = $value;
    }

    /**
     * Sets the endpointSecurityPolicyProfile property value. The endpoint security policy profile. Possible values are: unknown, antivirus, windowsSecurity, bitLocker, fileVault, firewall, firewallRules, endpointDetectionAndResponse, deviceControl, appAndBrowserIsolation, exploitProtection, webProtection, applicationControl, attackSurfaceReductionRules, accountProtection.
     *  @param EndpointSecurityConfigurationProfileType|null $value Value to set for the endpointSecurityPolicyProfile property.
    */
    public function setEndpointSecurityPolicyProfile(?EndpointSecurityConfigurationProfileType $value ): void {
        $this->endpointSecurityPolicyProfile = $value;
    }

    /**
     * Sets the insights property value. Information about the mitigation.
     *  @param string|null $value Value to set for the insights property.
    */
    public function setInsights(?string $value ): void {
        $this->insights = $value;
    }

    /**
     * Sets the intendedSettings property value. The intended settings and their values.
     *  @param array<KeyValuePair>|null $value Value to set for the intendedSettings property.
    */
    public function setIntendedSettings(?array $value ): void {
        $this->intendedSettings = $value;
    }

    /**
     * Sets the managedDeviceCount property value. The number of vulnerable devices.
     *  @param int|null $value Value to set for the managedDeviceCount property.
    */
    public function setManagedDeviceCount(?int $value ): void {
        $this->managedDeviceCount = $value;
    }

    /**
     * Sets the managedDevices property value. The vulnerable managed devices.
     *  @param array<VulnerableManagedDevice>|null $value Value to set for the managedDevices property.
    */
    public function setManagedDevices(?array $value ): void {
        $this->managedDevices = $value;
    }

}
