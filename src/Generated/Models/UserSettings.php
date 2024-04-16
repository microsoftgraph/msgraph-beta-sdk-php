<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UserSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('contactMergeSuggestions');
        if (is_null($val) || $val instanceof ContactMergeSuggestions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contactMergeSuggestions'");
    }

    /**
     * Gets the contributionToContentDiscoveryAsOrganizationDisabled property value. Reflects the Office Delve organization level setting. When set to true, the organization doesn't have access to Office Delve. This setting is read-only and can only be changed by administrators in the SharePoint admin center.
     * @return bool|null
    */
    public function getContributionToContentDiscoveryAsOrganizationDisabled(): ?bool {
        $val = $this->getBackingStore()->get('contributionToContentDiscoveryAsOrganizationDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contributionToContentDiscoveryAsOrganizationDisabled'");
    }

    /**
     * Gets the contributionToContentDiscoveryDisabled property value. When set to true, documents in the user's Office Delve are disabled. Users can control this setting in Office Delve.
     * @return bool|null
    */
    public function getContributionToContentDiscoveryDisabled(): ?bool {
        $val = $this->getBackingStore()->get('contributionToContentDiscoveryDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contributionToContentDiscoveryDisabled'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
            'storage' => fn(ParseNode $n) => $o->setStorage($n->getObjectValue([UserStorage::class, 'createFromDiscriminatorValue'])),
            'windows' => fn(ParseNode $n) => $o->setWindows($n->getCollectionOfObjectValues([WindowsSetting::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the itemInsights property value. The user's settings for the visibility of meeting hour insights, and insights derived between a user and other items in Microsoft 365, such as documents or sites. Get userInsightsSettings through this navigation property.
     * @return UserInsightsSettings|null
    */
    public function getItemInsights(): ?UserInsightsSettings {
        $val = $this->getBackingStore()->get('itemInsights');
        if (is_null($val) || $val instanceof UserInsightsSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'itemInsights'");
    }

    /**
     * Gets the regionalAndLanguageSettings property value. The user's preferences for languages, regional locale and date/time formatting.
     * @return RegionalAndLanguageSettings|null
    */
    public function getRegionalAndLanguageSettings(): ?RegionalAndLanguageSettings {
        $val = $this->getBackingStore()->get('regionalAndLanguageSettings');
        if (is_null($val) || $val instanceof RegionalAndLanguageSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'regionalAndLanguageSettings'");
    }

    /**
     * Gets the shiftPreferences property value. The shift preferences for the user.
     * @return ShiftPreferences|null
    */
    public function getShiftPreferences(): ?ShiftPreferences {
        $val = $this->getBackingStore()->get('shiftPreferences');
        if (is_null($val) || $val instanceof ShiftPreferences) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shiftPreferences'");
    }

    /**
     * Gets the storage property value. The storage property
     * @return UserStorage|null
    */
    public function getStorage(): ?UserStorage {
        $val = $this->getBackingStore()->get('storage');
        if (is_null($val) || $val instanceof UserStorage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storage'");
    }

    /**
     * Gets the windows property value. The Windows settings of the user stored in the cloud.
     * @return array<WindowsSetting>|null
    */
    public function getWindows(): ?array {
        $val = $this->getBackingStore()->get('windows');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsSetting::class);
            /** @var array<WindowsSetting>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windows'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('contactMergeSuggestions', $this->getContactMergeSuggestions());
        $writer->writeBooleanValue('contributionToContentDiscoveryAsOrganizationDisabled', $this->getContributionToContentDiscoveryAsOrganizationDisabled());
        $writer->writeBooleanValue('contributionToContentDiscoveryDisabled', $this->getContributionToContentDiscoveryDisabled());
        $writer->writeObjectValue('itemInsights', $this->getItemInsights());
        $writer->writeObjectValue('regionalAndLanguageSettings', $this->getRegionalAndLanguageSettings());
        $writer->writeObjectValue('shiftPreferences', $this->getShiftPreferences());
        $writer->writeObjectValue('storage', $this->getStorage());
        $writer->writeCollectionOfObjectValues('windows', $this->getWindows());
    }

    /**
     * Sets the contactMergeSuggestions property value. The user's settings for the visibility of merge suggestion for the duplicate contacts in the user's contact list.
     * @param ContactMergeSuggestions|null $value Value to set for the contactMergeSuggestions property.
    */
    public function setContactMergeSuggestions(?ContactMergeSuggestions $value): void {
        $this->getBackingStore()->set('contactMergeSuggestions', $value);
    }

    /**
     * Sets the contributionToContentDiscoveryAsOrganizationDisabled property value. Reflects the Office Delve organization level setting. When set to true, the organization doesn't have access to Office Delve. This setting is read-only and can only be changed by administrators in the SharePoint admin center.
     * @param bool|null $value Value to set for the contributionToContentDiscoveryAsOrganizationDisabled property.
    */
    public function setContributionToContentDiscoveryAsOrganizationDisabled(?bool $value): void {
        $this->getBackingStore()->set('contributionToContentDiscoveryAsOrganizationDisabled', $value);
    }

    /**
     * Sets the contributionToContentDiscoveryDisabled property value. When set to true, documents in the user's Office Delve are disabled. Users can control this setting in Office Delve.
     * @param bool|null $value Value to set for the contributionToContentDiscoveryDisabled property.
    */
    public function setContributionToContentDiscoveryDisabled(?bool $value): void {
        $this->getBackingStore()->set('contributionToContentDiscoveryDisabled', $value);
    }

    /**
     * Sets the itemInsights property value. The user's settings for the visibility of meeting hour insights, and insights derived between a user and other items in Microsoft 365, such as documents or sites. Get userInsightsSettings through this navigation property.
     * @param UserInsightsSettings|null $value Value to set for the itemInsights property.
    */
    public function setItemInsights(?UserInsightsSettings $value): void {
        $this->getBackingStore()->set('itemInsights', $value);
    }

    /**
     * Sets the regionalAndLanguageSettings property value. The user's preferences for languages, regional locale and date/time formatting.
     * @param RegionalAndLanguageSettings|null $value Value to set for the regionalAndLanguageSettings property.
    */
    public function setRegionalAndLanguageSettings(?RegionalAndLanguageSettings $value): void {
        $this->getBackingStore()->set('regionalAndLanguageSettings', $value);
    }

    /**
     * Sets the shiftPreferences property value. The shift preferences for the user.
     * @param ShiftPreferences|null $value Value to set for the shiftPreferences property.
    */
    public function setShiftPreferences(?ShiftPreferences $value): void {
        $this->getBackingStore()->set('shiftPreferences', $value);
    }

    /**
     * Sets the storage property value. The storage property
     * @param UserStorage|null $value Value to set for the storage property.
    */
    public function setStorage(?UserStorage $value): void {
        $this->getBackingStore()->set('storage', $value);
    }

    /**
     * Sets the windows property value. The Windows settings of the user stored in the cloud.
     * @param array<WindowsSetting>|null $value Value to set for the windows property.
    */
    public function setWindows(?array $value): void {
        $this->getBackingStore()->set('windows', $value);
    }

}
