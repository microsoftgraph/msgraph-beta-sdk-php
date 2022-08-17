<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EnrollmentProfile extends Entity implements Parsable 
{
    /**
     * @var string|null $configurationEndpointUrl Configuration endpoint url to use for Enrollment
    */
    private ?string $configurationEndpointUrl = null;
    
    /**
     * @var string|null $description Description of the profile
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Name of the profile
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $enableAuthenticationViaCompanyPortal Indicates to authenticate with Apple Setup Assistant instead of Company Portal.
    */
    private ?bool $enableAuthenticationViaCompanyPortal = null;
    
    /**
     * @var bool|null $requireCompanyPortalOnSetupAssistantEnrolledDevices Indicates that Company Portal is required on setup assistant enrolled devices
    */
    private ?bool $requireCompanyPortalOnSetupAssistantEnrolledDevices = null;
    
    /**
     * @var bool|null $requiresUserAuthentication Indicates if the profile requires user authentication
    */
    private ?bool $requiresUserAuthentication = null;
    
    /**
     * Instantiates a new enrollmentProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.enrollmentProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EnrollmentProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EnrollmentProfile {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.depEnrollmentBaseProfile': return new DepEnrollmentBaseProfile();
                case '#microsoft.graph.depEnrollmentProfile': return new DepEnrollmentProfile();
                case '#microsoft.graph.depIOSEnrollmentProfile': return new DepIOSEnrollmentProfile();
                case '#microsoft.graph.depMacOSEnrollmentProfile': return new DepMacOSEnrollmentProfile();
            }
        }
        return new EnrollmentProfile();
    }

    /**
     * Gets the configurationEndpointUrl property value. Configuration endpoint url to use for Enrollment
     * @return string|null
    */
    public function getConfigurationEndpointUrl(): ?string {
        return $this->configurationEndpointUrl;
    }

    /**
     * Gets the description property value. Description of the profile
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Name of the profile
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the enableAuthenticationViaCompanyPortal property value. Indicates to authenticate with Apple Setup Assistant instead of Company Portal.
     * @return bool|null
    */
    public function getEnableAuthenticationViaCompanyPortal(): ?bool {
        return $this->enableAuthenticationViaCompanyPortal;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configurationEndpointUrl' => function (ParseNode $n) use ($o) { $o->setConfigurationEndpointUrl($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'enableAuthenticationViaCompanyPortal' => function (ParseNode $n) use ($o) { $o->setEnableAuthenticationViaCompanyPortal($n->getBooleanValue()); },
            'requireCompanyPortalOnSetupAssistantEnrolledDevices' => function (ParseNode $n) use ($o) { $o->setRequireCompanyPortalOnSetupAssistantEnrolledDevices($n->getBooleanValue()); },
            'requiresUserAuthentication' => function (ParseNode $n) use ($o) { $o->setRequiresUserAuthentication($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the requireCompanyPortalOnSetupAssistantEnrolledDevices property value. Indicates that Company Portal is required on setup assistant enrolled devices
     * @return bool|null
    */
    public function getRequireCompanyPortalOnSetupAssistantEnrolledDevices(): ?bool {
        return $this->requireCompanyPortalOnSetupAssistantEnrolledDevices;
    }

    /**
     * Gets the requiresUserAuthentication property value. Indicates if the profile requires user authentication
     * @return bool|null
    */
    public function getRequiresUserAuthentication(): ?bool {
        return $this->requiresUserAuthentication;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('configurationEndpointUrl', $this->configurationEndpointUrl);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('enableAuthenticationViaCompanyPortal', $this->enableAuthenticationViaCompanyPortal);
        $writer->writeBooleanValue('requireCompanyPortalOnSetupAssistantEnrolledDevices', $this->requireCompanyPortalOnSetupAssistantEnrolledDevices);
        $writer->writeBooleanValue('requiresUserAuthentication', $this->requiresUserAuthentication);
    }

    /**
     * Sets the configurationEndpointUrl property value. Configuration endpoint url to use for Enrollment
     *  @param string|null $value Value to set for the configurationEndpointUrl property.
    */
    public function setConfigurationEndpointUrl(?string $value ): void {
        $this->configurationEndpointUrl = $value;
    }

    /**
     * Sets the description property value. Description of the profile
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Name of the profile
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the enableAuthenticationViaCompanyPortal property value. Indicates to authenticate with Apple Setup Assistant instead of Company Portal.
     *  @param bool|null $value Value to set for the enableAuthenticationViaCompanyPortal property.
    */
    public function setEnableAuthenticationViaCompanyPortal(?bool $value ): void {
        $this->enableAuthenticationViaCompanyPortal = $value;
    }

    /**
     * Sets the requireCompanyPortalOnSetupAssistantEnrolledDevices property value. Indicates that Company Portal is required on setup assistant enrolled devices
     *  @param bool|null $value Value to set for the requireCompanyPortalOnSetupAssistantEnrolledDevices property.
    */
    public function setRequireCompanyPortalOnSetupAssistantEnrolledDevices(?bool $value ): void {
        $this->requireCompanyPortalOnSetupAssistantEnrolledDevices = $value;
    }

    /**
     * Sets the requiresUserAuthentication property value. Indicates if the profile requires user authentication
     *  @param bool|null $value Value to set for the requiresUserAuthentication property.
    */
    public function setRequiresUserAuthentication(?bool $value ): void {
        $this->requiresUserAuthentication = $value;
    }

}
