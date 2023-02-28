<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows10SecureAssessmentConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new Windows10SecureAssessmentConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows10SecureAssessmentConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10SecureAssessmentConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10SecureAssessmentConfiguration {
        return new Windows10SecureAssessmentConfiguration();
    }

    /**
     * Gets the allowPrinting property value. Indicates whether or not to allow the app from printing during the test.
     * @return bool|null
    */
    public function getAllowPrinting(): ?bool {
        return $this->getBackingStore()->get('allowPrinting');
    }

    /**
     * Gets the allowScreenCapture property value. Indicates whether or not to allow screen capture capability during a test.
     * @return bool|null
    */
    public function getAllowScreenCapture(): ?bool {
        return $this->getBackingStore()->get('allowScreenCapture');
    }

    /**
     * Gets the allowTextSuggestion property value. Indicates whether or not to allow text suggestions during the test.
     * @return bool|null
    */
    public function getAllowTextSuggestion(): ?bool {
        return $this->getBackingStore()->get('allowTextSuggestion');
    }

    /**
     * Gets the assessmentAppUserModelId property value. Specifies the application user model ID of the assessment app launched when a user signs in to a secure assessment with a local guest account. Important notice: this property must be set with localGuestAccountName in order to make the local guest account sign-in experience work properly for secure assessments.
     * @return string|null
    */
    public function getAssessmentAppUserModelId(): ?string {
        return $this->getBackingStore()->get('assessmentAppUserModelId');
    }

    /**
     * Gets the configurationAccount property value. The account used to configure the Windows device for taking the test. The user can be a domain account (domain/user), an AAD account (username@tenant.com) or a local account (username).
     * @return string|null
    */
    public function getConfigurationAccount(): ?string {
        return $this->getBackingStore()->get('configurationAccount');
    }

    /**
     * Gets the configurationAccountType property value. Type of accounts that are allowed for Windows10SecureAssessment ConfigurationAccount.
     * @return SecureAssessmentAccountType|null
    */
    public function getConfigurationAccountType(): ?SecureAssessmentAccountType {
        return $this->getBackingStore()->get('configurationAccountType');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowPrinting' => fn(ParseNode $n) => $o->setAllowPrinting($n->getBooleanValue()),
            'allowScreenCapture' => fn(ParseNode $n) => $o->setAllowScreenCapture($n->getBooleanValue()),
            'allowTextSuggestion' => fn(ParseNode $n) => $o->setAllowTextSuggestion($n->getBooleanValue()),
            'assessmentAppUserModelId' => fn(ParseNode $n) => $o->setAssessmentAppUserModelId($n->getStringValue()),
            'configurationAccount' => fn(ParseNode $n) => $o->setConfigurationAccount($n->getStringValue()),
            'configurationAccountType' => fn(ParseNode $n) => $o->setConfigurationAccountType($n->getEnumValue(SecureAssessmentAccountType::class)),
            'launchUri' => fn(ParseNode $n) => $o->setLaunchUri($n->getStringValue()),
            'localGuestAccountName' => fn(ParseNode $n) => $o->setLocalGuestAccountName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the launchUri property value. Url link to an assessment that's automatically loaded when the secure assessment browser is launched. It has to be a valid Url (http[s]://msdn.microsoft.com/).
     * @return string|null
    */
    public function getLaunchUri(): ?string {
        return $this->getBackingStore()->get('launchUri');
    }

    /**
     * Gets the localGuestAccountName property value. Specifies the display text for the local guest account shown on the sign-in screen. Typically is the name of an assessment. When the user clicks the local guest account on the sign-in screen, an assessment app is launched with a specified assessment URL. Secure assessments can only be configured with local guest account sign-in on devices running Windows 10, version 1903 or later. Important notice: this property must be set with assessmentAppUserModelID in order to make the local guest account sign-in experience work properly for secure assessments.
     * @return string|null
    */
    public function getLocalGuestAccountName(): ?string {
        return $this->getBackingStore()->get('localGuestAccountName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowPrinting', $this->getAllowPrinting());
        $writer->writeBooleanValue('allowScreenCapture', $this->getAllowScreenCapture());
        $writer->writeBooleanValue('allowTextSuggestion', $this->getAllowTextSuggestion());
        $writer->writeStringValue('assessmentAppUserModelId', $this->getAssessmentAppUserModelId());
        $writer->writeStringValue('configurationAccount', $this->getConfigurationAccount());
        $writer->writeEnumValue('configurationAccountType', $this->getConfigurationAccountType());
        $writer->writeStringValue('launchUri', $this->getLaunchUri());
        $writer->writeStringValue('localGuestAccountName', $this->getLocalGuestAccountName());
    }

    /**
     * Sets the allowPrinting property value. Indicates whether or not to allow the app from printing during the test.
     * @param bool|null $value Value to set for the allowPrinting property.
    */
    public function setAllowPrinting(?bool $value): void {
        $this->getBackingStore()->set('allowPrinting', $value);
    }

    /**
     * Sets the allowScreenCapture property value. Indicates whether or not to allow screen capture capability during a test.
     * @param bool|null $value Value to set for the allowScreenCapture property.
    */
    public function setAllowScreenCapture(?bool $value): void {
        $this->getBackingStore()->set('allowScreenCapture', $value);
    }

    /**
     * Sets the allowTextSuggestion property value. Indicates whether or not to allow text suggestions during the test.
     * @param bool|null $value Value to set for the allowTextSuggestion property.
    */
    public function setAllowTextSuggestion(?bool $value): void {
        $this->getBackingStore()->set('allowTextSuggestion', $value);
    }

    /**
     * Sets the assessmentAppUserModelId property value. Specifies the application user model ID of the assessment app launched when a user signs in to a secure assessment with a local guest account. Important notice: this property must be set with localGuestAccountName in order to make the local guest account sign-in experience work properly for secure assessments.
     * @param string|null $value Value to set for the assessmentAppUserModelId property.
    */
    public function setAssessmentAppUserModelId(?string $value): void {
        $this->getBackingStore()->set('assessmentAppUserModelId', $value);
    }

    /**
     * Sets the configurationAccount property value. The account used to configure the Windows device for taking the test. The user can be a domain account (domain/user), an AAD account (username@tenant.com) or a local account (username).
     * @param string|null $value Value to set for the configurationAccount property.
    */
    public function setConfigurationAccount(?string $value): void {
        $this->getBackingStore()->set('configurationAccount', $value);
    }

    /**
     * Sets the configurationAccountType property value. Type of accounts that are allowed for Windows10SecureAssessment ConfigurationAccount.
     * @param SecureAssessmentAccountType|null $value Value to set for the configurationAccountType property.
    */
    public function setConfigurationAccountType(?SecureAssessmentAccountType $value): void {
        $this->getBackingStore()->set('configurationAccountType', $value);
    }

    /**
     * Sets the launchUri property value. Url link to an assessment that's automatically loaded when the secure assessment browser is launched. It has to be a valid Url (http[s]://msdn.microsoft.com/).
     * @param string|null $value Value to set for the launchUri property.
    */
    public function setLaunchUri(?string $value): void {
        $this->getBackingStore()->set('launchUri', $value);
    }

    /**
     * Sets the localGuestAccountName property value. Specifies the display text for the local guest account shown on the sign-in screen. Typically is the name of an assessment. When the user clicks the local guest account on the sign-in screen, an assessment app is launched with a specified assessment URL. Secure assessments can only be configured with local guest account sign-in on devices running Windows 10, version 1903 or later. Important notice: this property must be set with assessmentAppUserModelID in order to make the local guest account sign-in experience work properly for secure assessments.
     * @param string|null $value Value to set for the localGuestAccountName property.
    */
    public function setLocalGuestAccountName(?string $value): void {
        $this->getBackingStore()->set('localGuestAccountName', $value);
    }

}
