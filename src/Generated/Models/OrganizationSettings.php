<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OrganizationSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new organizationSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.organizationSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationSettings {
        return new OrganizationSettings();
    }

    /**
     * Gets the contactInsights property value. Contains the properties that are configured by an administrator as a tenant-level privacy control whether to identify duplicate contacts among a user's contacts list and suggest the user to merge those contacts to have a cleaner contacts list. List contactInsights returns the settings to display or return contact insights in an organization.
     * @return InsightsSettings|null
    */
    public function getContactInsights(): ?InsightsSettings {
        return $this->getBackingStore()->get('contactInsights');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contactInsights' => fn(ParseNode $n) => $o->setContactInsights($n->getObjectValue([InsightsSettings::class, 'createFromDiscriminatorValue'])),
            'itemInsights' => fn(ParseNode $n) => $o->setItemInsights($n->getObjectValue([InsightsSettings::class, 'createFromDiscriminatorValue'])),
            'microsoftApplicationDataAccess' => fn(ParseNode $n) => $o->setMicrosoftApplicationDataAccess($n->getObjectValue([MicrosoftApplicationDataAccessSettings::class, 'createFromDiscriminatorValue'])),
            'peopleInsights' => fn(ParseNode $n) => $o->setPeopleInsights($n->getObjectValue([InsightsSettings::class, 'createFromDiscriminatorValue'])),
            'profileCardProperties' => fn(ParseNode $n) => $o->setProfileCardProperties($n->getCollectionOfObjectValues([ProfileCardProperty::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the itemInsights property value. Contains the properties that are configured by an administrator for the visibility of Microsoft Graph-derived insights, between a user and other items in Microsoft 365, such as documents or sites. List itemInsights returns the settings to display or return item insights in an organization.
     * @return InsightsSettings|null
    */
    public function getItemInsights(): ?InsightsSettings {
        return $this->getBackingStore()->get('itemInsights');
    }

    /**
     * Gets the microsoftApplicationDataAccess property value. The microsoftApplicationDataAccess property
     * @return MicrosoftApplicationDataAccessSettings|null
    */
    public function getMicrosoftApplicationDataAccess(): ?MicrosoftApplicationDataAccessSettings {
        return $this->getBackingStore()->get('microsoftApplicationDataAccess');
    }

    /**
     * Gets the peopleInsights property value. Contains the properties that are configured by an administrator for the visibility of a list of people relevant and working with a user in Microsoft 365. List peopleInsights returns the settings to display or return people insights in an organization.
     * @return InsightsSettings|null
    */
    public function getPeopleInsights(): ?InsightsSettings {
        return $this->getBackingStore()->get('peopleInsights');
    }

    /**
     * Gets the profileCardProperties property value. Contains a collection of the properties an administrator has defined as visible on the Microsoft 365 profile card. Get organization settings returns the properties configured for profile cards for the organization.
     * @return array<ProfileCardProperty>|null
    */
    public function getProfileCardProperties(): ?array {
        return $this->getBackingStore()->get('profileCardProperties');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('contactInsights', $this->getContactInsights());
        $writer->writeObjectValue('itemInsights', $this->getItemInsights());
        $writer->writeObjectValue('microsoftApplicationDataAccess', $this->getMicrosoftApplicationDataAccess());
        $writer->writeObjectValue('peopleInsights', $this->getPeopleInsights());
        $writer->writeCollectionOfObjectValues('profileCardProperties', $this->getProfileCardProperties());
    }

    /**
     * Sets the contactInsights property value. Contains the properties that are configured by an administrator as a tenant-level privacy control whether to identify duplicate contacts among a user's contacts list and suggest the user to merge those contacts to have a cleaner contacts list. List contactInsights returns the settings to display or return contact insights in an organization.
     *  @param InsightsSettings|null $value Value to set for the contactInsights property.
    */
    public function setContactInsights(?InsightsSettings $value): void {
        $this->getBackingStore()->set('contactInsights', $value);
    }

    /**
     * Sets the itemInsights property value. Contains the properties that are configured by an administrator for the visibility of Microsoft Graph-derived insights, between a user and other items in Microsoft 365, such as documents or sites. List itemInsights returns the settings to display or return item insights in an organization.
     *  @param InsightsSettings|null $value Value to set for the itemInsights property.
    */
    public function setItemInsights(?InsightsSettings $value): void {
        $this->getBackingStore()->set('itemInsights', $value);
    }

    /**
     * Sets the microsoftApplicationDataAccess property value. The microsoftApplicationDataAccess property
     *  @param MicrosoftApplicationDataAccessSettings|null $value Value to set for the microsoftApplicationDataAccess property.
    */
    public function setMicrosoftApplicationDataAccess(?MicrosoftApplicationDataAccessSettings $value): void {
        $this->getBackingStore()->set('microsoftApplicationDataAccess', $value);
    }

    /**
     * Sets the peopleInsights property value. Contains the properties that are configured by an administrator for the visibility of a list of people relevant and working with a user in Microsoft 365. List peopleInsights returns the settings to display or return people insights in an organization.
     *  @param InsightsSettings|null $value Value to set for the peopleInsights property.
    */
    public function setPeopleInsights(?InsightsSettings $value): void {
        $this->getBackingStore()->set('peopleInsights', $value);
    }

    /**
     * Sets the profileCardProperties property value. Contains a collection of the properties an administrator has defined as visible on the Microsoft 365 profile card. Get organization settings returns the properties configured for profile cards for the organization.
     *  @param array<ProfileCardProperty>|null $value Value to set for the profileCardProperties property.
    */
    public function setProfileCardProperties(?array $value): void {
        $this->getBackingStore()->set('profileCardProperties', $value);
    }

}
