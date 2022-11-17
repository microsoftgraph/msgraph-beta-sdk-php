<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EmailThreatSubmissionPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new emailThreatSubmissionPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.emailThreatSubmissionPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmailThreatSubmissionPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EmailThreatSubmissionPolicy {
        return new EmailThreatSubmissionPolicy();
    }

    /**
     * Gets the customizedNotificationSenderEmailAddress property value. Specifies the email address of the sender from which email notifications will be sent to end users to inform them whether an email is spam, phish or clean. The default value is null. Optional for creation.
     * @return string|null
    */
    public function getCustomizedNotificationSenderEmailAddress(): ?string {
        return $this->getBackingStore()->get('customizedNotificationSenderEmailAddress');
    }

    /**
     * Gets the customizedReportRecipientEmailAddress property value. Specifies the destination where the reported messages from end users will land whenever they report something as phish, junk or not junk. The default value is null. Optional for creation.
     * @return string|null
    */
    public function getCustomizedReportRecipientEmailAddress(): ?string {
        return $this->getBackingStore()->get('customizedReportRecipientEmailAddress');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customizedNotificationSenderEmailAddress' => fn(ParseNode $n) => $o->setCustomizedNotificationSenderEmailAddress($n->getStringValue()),
            'customizedReportRecipientEmailAddress' => fn(ParseNode $n) => $o->setCustomizedReportRecipientEmailAddress($n->getStringValue()),
            'isAlwaysReportEnabledForUsers' => fn(ParseNode $n) => $o->setIsAlwaysReportEnabledForUsers($n->getBooleanValue()),
            'isAskMeEnabledForUsers' => fn(ParseNode $n) => $o->setIsAskMeEnabledForUsers($n->getBooleanValue()),
            'isCustomizedMessageEnabled' => fn(ParseNode $n) => $o->setIsCustomizedMessageEnabled($n->getBooleanValue()),
            'isCustomizedMessageEnabledForPhishing' => fn(ParseNode $n) => $o->setIsCustomizedMessageEnabledForPhishing($n->getBooleanValue()),
            'isCustomizedNotificationSenderEnabled' => fn(ParseNode $n) => $o->setIsCustomizedNotificationSenderEnabled($n->getBooleanValue()),
            'isNeverReportEnabledForUsers' => fn(ParseNode $n) => $o->setIsNeverReportEnabledForUsers($n->getBooleanValue()),
            'isOrganizationBrandingEnabled' => fn(ParseNode $n) => $o->setIsOrganizationBrandingEnabled($n->getBooleanValue()),
            'isReportFromQuarantineEnabled' => fn(ParseNode $n) => $o->setIsReportFromQuarantineEnabled($n->getBooleanValue()),
            'isReportToCustomizedEmailAddressEnabled' => fn(ParseNode $n) => $o->setIsReportToCustomizedEmailAddressEnabled($n->getBooleanValue()),
            'isReportToMicrosoftEnabled' => fn(ParseNode $n) => $o->setIsReportToMicrosoftEnabled($n->getBooleanValue()),
            'isReviewEmailNotificationEnabled' => fn(ParseNode $n) => $o->setIsReviewEmailNotificationEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isAlwaysReportEnabledForUsers property value. Indicates whether end users can report a message as spam, phish or junk directly without a confirmation(popup). The default value is true.  Optional for creation.
     * @return bool|null
    */
    public function getIsAlwaysReportEnabledForUsers(): ?bool {
        return $this->getBackingStore()->get('isAlwaysReportEnabledForUsers');
    }

    /**
     * Gets the isAskMeEnabledForUsers property value. Indicates whether end users can confirm using a popup before reporting messages as spam, phish or not junk. The default value is true.  Optional for creation.
     * @return bool|null
    */
    public function getIsAskMeEnabledForUsers(): ?bool {
        return $this->getBackingStore()->get('isAskMeEnabledForUsers');
    }

    /**
     * Gets the isCustomizedMessageEnabled property value. Indicates whether the email notifications sent to end users to inform them if an email is phish, spam or junk is customized or not. The default value is false. Optional for creation.
     * @return bool|null
    */
    public function getIsCustomizedMessageEnabled(): ?bool {
        return $this->getBackingStore()->get('isCustomizedMessageEnabled');
    }

    /**
     * Gets the isCustomizedMessageEnabledForPhishing property value. If enabled, customized message only shows when email is reported as phishing. The default value is false. Optional for creation.
     * @return bool|null
    */
    public function getIsCustomizedMessageEnabledForPhishing(): ?bool {
        return $this->getBackingStore()->get('isCustomizedMessageEnabledForPhishing');
    }

    /**
     * Gets the isCustomizedNotificationSenderEnabled property value. Indicates whether to use the sender email address set using customizedNotificationSenderEmailAddress for sending email notifications to end users. The default value is false. Optional for creation.
     * @return bool|null
    */
    public function getIsCustomizedNotificationSenderEnabled(): ?bool {
        return $this->getBackingStore()->get('isCustomizedNotificationSenderEnabled');
    }

    /**
     * Gets the isNeverReportEnabledForUsers property value. Indicates whether end users can simply move the message from one folder to another based on the action of spam, phish or not junk without actually reporting it. The default value is true. Optional for creation.
     * @return bool|null
    */
    public function getIsNeverReportEnabledForUsers(): ?bool {
        return $this->getBackingStore()->get('isNeverReportEnabledForUsers');
    }

    /**
     * Gets the isOrganizationBrandingEnabled property value. Indicates whether the branding logo should be used in the email notifications sent to end users. The default value is false. Optional for creation.
     * @return bool|null
    */
    public function getIsOrganizationBrandingEnabled(): ?bool {
        return $this->getBackingStore()->get('isOrganizationBrandingEnabled');
    }

    /**
     * Gets the isReportFromQuarantineEnabled property value. Indicates whether end users can submit from the quarantine page. The default value is true. Optional for creation.
     * @return bool|null
    */
    public function getIsReportFromQuarantineEnabled(): ?bool {
        return $this->getBackingStore()->get('isReportFromQuarantineEnabled');
    }

    /**
     * Gets the isReportToCustomizedEmailAddressEnabled property value. Indicates whether emails reported by end users should be send to the custom mailbox configured using customizedReportRecipientEmailAddress.  The default value is false. Optional for creation.
     * @return bool|null
    */
    public function getIsReportToCustomizedEmailAddressEnabled(): ?bool {
        return $this->getBackingStore()->get('isReportToCustomizedEmailAddressEnabled');
    }

    /**
     * Gets the isReportToMicrosoftEnabled property value. If enabled, the email will be sent to Microsoft for analysis. The default value is false. Required for creation.
     * @return bool|null
    */
    public function getIsReportToMicrosoftEnabled(): ?bool {
        return $this->getBackingStore()->get('isReportToMicrosoftEnabled');
    }

    /**
     * Gets the isReviewEmailNotificationEnabled property value. Indicates whether an email notification is sent to the end user who reported the email when it has been reviewed by the admin. The default value is false. Optional for creation.
     * @return bool|null
    */
    public function getIsReviewEmailNotificationEnabled(): ?bool {
        return $this->getBackingStore()->get('isReviewEmailNotificationEnabled');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('customizedNotificationSenderEmailAddress', $this->getCustomizedNotificationSenderEmailAddress());
        $writer->writeStringValue('customizedReportRecipientEmailAddress', $this->getCustomizedReportRecipientEmailAddress());
        $writer->writeBooleanValue('isAlwaysReportEnabledForUsers', $this->getIsAlwaysReportEnabledForUsers());
        $writer->writeBooleanValue('isAskMeEnabledForUsers', $this->getIsAskMeEnabledForUsers());
        $writer->writeBooleanValue('isCustomizedMessageEnabled', $this->getIsCustomizedMessageEnabled());
        $writer->writeBooleanValue('isCustomizedMessageEnabledForPhishing', $this->getIsCustomizedMessageEnabledForPhishing());
        $writer->writeBooleanValue('isCustomizedNotificationSenderEnabled', $this->getIsCustomizedNotificationSenderEnabled());
        $writer->writeBooleanValue('isNeverReportEnabledForUsers', $this->getIsNeverReportEnabledForUsers());
        $writer->writeBooleanValue('isOrganizationBrandingEnabled', $this->getIsOrganizationBrandingEnabled());
        $writer->writeBooleanValue('isReportFromQuarantineEnabled', $this->getIsReportFromQuarantineEnabled());
        $writer->writeBooleanValue('isReportToCustomizedEmailAddressEnabled', $this->getIsReportToCustomizedEmailAddressEnabled());
        $writer->writeBooleanValue('isReportToMicrosoftEnabled', $this->getIsReportToMicrosoftEnabled());
        $writer->writeBooleanValue('isReviewEmailNotificationEnabled', $this->getIsReviewEmailNotificationEnabled());
    }

    /**
     * Sets the customizedNotificationSenderEmailAddress property value. Specifies the email address of the sender from which email notifications will be sent to end users to inform them whether an email is spam, phish or clean. The default value is null. Optional for creation.
     *  @param string|null $value Value to set for the customizedNotificationSenderEmailAddress property.
    */
    public function setCustomizedNotificationSenderEmailAddress(?string $value): void {
        $this->getBackingStore()->set('customizedNotificationSenderEmailAddress', $value);
    }

    /**
     * Sets the customizedReportRecipientEmailAddress property value. Specifies the destination where the reported messages from end users will land whenever they report something as phish, junk or not junk. The default value is null. Optional for creation.
     *  @param string|null $value Value to set for the customizedReportRecipientEmailAddress property.
    */
    public function setCustomizedReportRecipientEmailAddress(?string $value): void {
        $this->getBackingStore()->set('customizedReportRecipientEmailAddress', $value);
    }

    /**
     * Sets the isAlwaysReportEnabledForUsers property value. Indicates whether end users can report a message as spam, phish or junk directly without a confirmation(popup). The default value is true.  Optional for creation.
     *  @param bool|null $value Value to set for the isAlwaysReportEnabledForUsers property.
    */
    public function setIsAlwaysReportEnabledForUsers(?bool $value): void {
        $this->getBackingStore()->set('isAlwaysReportEnabledForUsers', $value);
    }

    /**
     * Sets the isAskMeEnabledForUsers property value. Indicates whether end users can confirm using a popup before reporting messages as spam, phish or not junk. The default value is true.  Optional for creation.
     *  @param bool|null $value Value to set for the isAskMeEnabledForUsers property.
    */
    public function setIsAskMeEnabledForUsers(?bool $value): void {
        $this->getBackingStore()->set('isAskMeEnabledForUsers', $value);
    }

    /**
     * Sets the isCustomizedMessageEnabled property value. Indicates whether the email notifications sent to end users to inform them if an email is phish, spam or junk is customized or not. The default value is false. Optional for creation.
     *  @param bool|null $value Value to set for the isCustomizedMessageEnabled property.
    */
    public function setIsCustomizedMessageEnabled(?bool $value): void {
        $this->getBackingStore()->set('isCustomizedMessageEnabled', $value);
    }

    /**
     * Sets the isCustomizedMessageEnabledForPhishing property value. If enabled, customized message only shows when email is reported as phishing. The default value is false. Optional for creation.
     *  @param bool|null $value Value to set for the isCustomizedMessageEnabledForPhishing property.
    */
    public function setIsCustomizedMessageEnabledForPhishing(?bool $value): void {
        $this->getBackingStore()->set('isCustomizedMessageEnabledForPhishing', $value);
    }

    /**
     * Sets the isCustomizedNotificationSenderEnabled property value. Indicates whether to use the sender email address set using customizedNotificationSenderEmailAddress for sending email notifications to end users. The default value is false. Optional for creation.
     *  @param bool|null $value Value to set for the isCustomizedNotificationSenderEnabled property.
    */
    public function setIsCustomizedNotificationSenderEnabled(?bool $value): void {
        $this->getBackingStore()->set('isCustomizedNotificationSenderEnabled', $value);
    }

    /**
     * Sets the isNeverReportEnabledForUsers property value. Indicates whether end users can simply move the message from one folder to another based on the action of spam, phish or not junk without actually reporting it. The default value is true. Optional for creation.
     *  @param bool|null $value Value to set for the isNeverReportEnabledForUsers property.
    */
    public function setIsNeverReportEnabledForUsers(?bool $value): void {
        $this->getBackingStore()->set('isNeverReportEnabledForUsers', $value);
    }

    /**
     * Sets the isOrganizationBrandingEnabled property value. Indicates whether the branding logo should be used in the email notifications sent to end users. The default value is false. Optional for creation.
     *  @param bool|null $value Value to set for the isOrganizationBrandingEnabled property.
    */
    public function setIsOrganizationBrandingEnabled(?bool $value): void {
        $this->getBackingStore()->set('isOrganizationBrandingEnabled', $value);
    }

    /**
     * Sets the isReportFromQuarantineEnabled property value. Indicates whether end users can submit from the quarantine page. The default value is true. Optional for creation.
     *  @param bool|null $value Value to set for the isReportFromQuarantineEnabled property.
    */
    public function setIsReportFromQuarantineEnabled(?bool $value): void {
        $this->getBackingStore()->set('isReportFromQuarantineEnabled', $value);
    }

    /**
     * Sets the isReportToCustomizedEmailAddressEnabled property value. Indicates whether emails reported by end users should be send to the custom mailbox configured using customizedReportRecipientEmailAddress.  The default value is false. Optional for creation.
     *  @param bool|null $value Value to set for the isReportToCustomizedEmailAddressEnabled property.
    */
    public function setIsReportToCustomizedEmailAddressEnabled(?bool $value): void {
        $this->getBackingStore()->set('isReportToCustomizedEmailAddressEnabled', $value);
    }

    /**
     * Sets the isReportToMicrosoftEnabled property value. If enabled, the email will be sent to Microsoft for analysis. The default value is false. Required for creation.
     *  @param bool|null $value Value to set for the isReportToMicrosoftEnabled property.
    */
    public function setIsReportToMicrosoftEnabled(?bool $value): void {
        $this->getBackingStore()->set('isReportToMicrosoftEnabled', $value);
    }

    /**
     * Sets the isReviewEmailNotificationEnabled property value. Indicates whether an email notification is sent to the end user who reported the email when it has been reviewed by the admin. The default value is false. Optional for creation.
     *  @param bool|null $value Value to set for the isReviewEmailNotificationEnabled property.
    */
    public function setIsReviewEmailNotificationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isReviewEmailNotificationEnabled', $value);
    }

}
