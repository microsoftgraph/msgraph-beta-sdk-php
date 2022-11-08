<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserSettings extends Entity implements Parsable 
{
    /**
     * @var ContactMergeSuggestions|null $contactMergeSuggestions The user's settings for the visibility of merge suggestion for the duplicate contacts in the user's contact list.
    */
    private ?ContactMergeSuggestions $contactMergeSuggestions = null;
    
    /**
     * @var bool|null $contributionToContentDiscoveryAsOrganizationDisabled Reflects the Office Delve organization level setting. When set to true, the organization doesn't have access to Office Delve. This setting is read-only and can only be changed by administrators in the SharePoint admin center.
    */
    private ?bool $contributionToContentDiscoveryAsOrganizationDisabled = null;
    
    /**
     * @var bool|null $contributionToContentDiscoveryDisabled When set to true, documents in the user's Office Delve are disabled. Users can control this setting in Office Delve.
    */
    private ?bool $contributionToContentDiscoveryDisabled = null;
    
    /**
     * @var UserInsightsSettings|null $itemInsights The user's settings for the visibility of meeting hour insights, and insights derived between a user and other items in Microsoft 365, such as documents or sites. Get userInsightsSettings through this navigation property.
    */
    private ?UserInsightsSettings $itemInsights = null;
    
    /**
     * @var RegionalAndLanguageSettings|null $regionalAndLanguageSettings The user's preferences for languages, regional locale and date/time formatting.
    */
    private ?RegionalAndLanguageSettings $regionalAndLanguageSettings = null;
    
    /**
     * @var ShiftPreferences|null $shiftPreferences The shift preferences for the user.
    */
    private ?ShiftPreferences $shiftPreferences = null;
    
    /**
     * Instantiates a new UserSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserSettings {
        return new UserSettings();
    }

    /**
     * Gets the contactMergeSuggestions property value. The user's settings for the visibility of merge suggestion for the duplicate contacts in the user's contact list.
     * @return ContactMergeSuggestions|null
    */
    public function getContactMergeSuggestions(): ?ContactMergeSuggestions {
        return $this->contactMergeSuggestions;
    }

    /**
     * Gets the contributionToContentDiscoveryAsOrganizationDisabled property value. Reflects the Office Delve organization level setting. When set to true, the organization doesn't have access to Office Delve. This setting is read-only and can only be changed by administrators in the SharePoint admin center.
     * @return bool|null
    */
    public function getContributionToContentDiscoveryAsOrganizationDisabled(): ?bool {
        return $this->contributionToContentDiscoveryAsOrganizationDisabled;
    }

    /**
     * Gets the contributionToContentDiscoveryDisabled property value. When set to true, documents in the user's Office Delve are disabled. Users can control this setting in Office Delve.
     * @return bool|null
    */
    public function getContributionToContentDiscoveryDisabled(): ?bool {
        return $this->contributionToContentDiscoveryDisabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contactMergeSuggestions' => fn(ParseNode $n) => $o->setContactMergeSuggestions($n->getObjectValue([ContactMergeSuggestions::class, 'createFromDiscriminatorValue'])),
            'contributionToContentDiscoveryAsOrganizationDisabled' => fn(ParseNode $n) => $o->setContributionToContentDiscoveryAsOrganizationDisabled($n->getBooleanValue()),
            'contributionToContentDiscoveryDisabled' => fn(ParseNode $n) => $o->setContributionToContentDiscoveryDisabled($n->getBooleanValue()),
            'itemInsights' => fn(ParseNode $n) => $o->setItemInsights($n->getObjectValue([UserInsightsSettings::class, 'createFromDiscriminatorValue'])),
            'regionalAndLanguageSettings' => fn(ParseNode $n) => $o->setRegionalAndLanguageSettings($n->getObjectValue([RegionalAndLanguageSettings::class, 'createFromDiscriminatorValue'])),
            'shiftPreferences' => fn(ParseNode $n) => $o->setShiftPreferences($n->getObjectValue([ShiftPreferences::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the itemInsights property value. The user's settings for the visibility of meeting hour insights, and insights derived between a user and other items in Microsoft 365, such as documents or sites. Get userInsightsSettings through this navigation property.
     * @return UserInsightsSettings|null
    */
    public function getItemInsights(): ?UserInsightsSettings {
        return $this->itemInsights;
    }

    /**
     * Gets the regionalAndLanguageSettings property value. The user's preferences for languages, regional locale and date/time formatting.
     * @return RegionalAndLanguageSettings|null
    */
    public function getRegionalAndLanguageSettings(): ?RegionalAndLanguageSettings {
        return $this->regionalAndLanguageSettings;
    }

    /**
     * Gets the shiftPreferences property value. The shift preferences for the user.
     * @return ShiftPreferences|null
    */
    public function getShiftPreferences(): ?ShiftPreferences {
        return $this->shiftPreferences;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('contactMergeSuggestions', $this->contactMergeSuggestions);
        $writer->writeBooleanValue('contributionToContentDiscoveryAsOrganizationDisabled', $this->contributionToContentDiscoveryAsOrganizationDisabled);
        $writer->writeBooleanValue('contributionToContentDiscoveryDisabled', $this->contributionToContentDiscoveryDisabled);
        $writer->writeObjectValue('itemInsights', $this->itemInsights);
        $writer->writeObjectValue('regionalAndLanguageSettings', $this->regionalAndLanguageSettings);
        $writer->writeObjectValue('shiftPreferences', $this->shiftPreferences);
    }

    /**
     * Sets the contactMergeSuggestions property value. The user's settings for the visibility of merge suggestion for the duplicate contacts in the user's contact list.
     *  @param ContactMergeSuggestions|null $value Value to set for the contactMergeSuggestions property.
    */
    public function setContactMergeSuggestions(?ContactMergeSuggestions $value ): void {
        $this->contactMergeSuggestions = $value;
    }

    /**
     * Sets the contributionToContentDiscoveryAsOrganizationDisabled property value. Reflects the Office Delve organization level setting. When set to true, the organization doesn't have access to Office Delve. This setting is read-only and can only be changed by administrators in the SharePoint admin center.
     *  @param bool|null $value Value to set for the contributionToContentDiscoveryAsOrganizationDisabled property.
    */
    public function setContributionToContentDiscoveryAsOrganizationDisabled(?bool $value ): void {
        $this->contributionToContentDiscoveryAsOrganizationDisabled = $value;
    }

    /**
     * Sets the contributionToContentDiscoveryDisabled property value. When set to true, documents in the user's Office Delve are disabled. Users can control this setting in Office Delve.
     *  @param bool|null $value Value to set for the contributionToContentDiscoveryDisabled property.
    */
    public function setContributionToContentDiscoveryDisabled(?bool $value ): void {
        $this->contributionToContentDiscoveryDisabled = $value;
    }

    /**
     * Sets the itemInsights property value. The user's settings for the visibility of meeting hour insights, and insights derived between a user and other items in Microsoft 365, such as documents or sites. Get userInsightsSettings through this navigation property.
     *  @param UserInsightsSettings|null $value Value to set for the itemInsights property.
    */
    public function setItemInsights(?UserInsightsSettings $value ): void {
        $this->itemInsights = $value;
    }

    /**
     * Sets the regionalAndLanguageSettings property value. The user's preferences for languages, regional locale and date/time formatting.
     *  @param RegionalAndLanguageSettings|null $value Value to set for the regionalAndLanguageSettings property.
    */
    public function setRegionalAndLanguageSettings(?RegionalAndLanguageSettings $value ): void {
        $this->regionalAndLanguageSettings = $value;
    }

    /**
     * Sets the shiftPreferences property value. The shift preferences for the user.
     *  @param ShiftPreferences|null $value Value to set for the shiftPreferences property.
    */
    public function setShiftPreferences(?ShiftPreferences $value ): void {
        $this->shiftPreferences = $value;
    }

}
