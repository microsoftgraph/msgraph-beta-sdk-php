<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OrganizationSettings extends Entity 
{
    /** @var InsightsSettings|null $itemInsights Contains the properties that are configured by an administrator for the visibility of Microsoft Graph-derived insights, between a user and other items in Microsoft 365, such as documents or sites. List itemInsights returns the settings to display or return item insights in an organization. */
    private ?InsightsSettings $itemInsights = null;
    
    /** @var MicrosoftApplicationDataAccessSettings|null $microsoftApplicationDataAccess The microsoftApplicationDataAccess property */
    private ?MicrosoftApplicationDataAccessSettings $microsoftApplicationDataAccess = null;
    
    /** @var InsightsSettings|null $peopleInsights Contains the properties that are configured by an administrator for the visibility of a list of people relevant and working with a user in Microsoft 365. List peopleInsights returns the settings to display or return people insights in an organization. */
    private ?InsightsSettings $peopleInsights = null;
    
    /** @var array<ProfileCardProperty>|null $profileCardProperties Contains a collection of the properties an administrator has defined as visible on the Microsoft 365 profile card. Get organization settings returns the properties configured for profile cards for the organization. */
    private ?array $profileCardProperties = null;
    
    /**
     * Instantiates a new organizationSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationSettings {
        return new OrganizationSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'itemInsights' => function (self $o, ParseNode $n) { $o->setItemInsights($n->getObjectValue(InsightsSettings::class)); },
            'microsoftApplicationDataAccess' => function (self $o, ParseNode $n) { $o->setMicrosoftApplicationDataAccess($n->getObjectValue(MicrosoftApplicationDataAccessSettings::class)); },
            'peopleInsights' => function (self $o, ParseNode $n) { $o->setPeopleInsights($n->getObjectValue(InsightsSettings::class)); },
            'profileCardProperties' => function (self $o, ParseNode $n) { $o->setProfileCardProperties($n->getCollectionOfObjectValues(ProfileCardProperty::class)); },
        ]);
    }

    /**
     * Gets the itemInsights property value. Contains the properties that are configured by an administrator for the visibility of Microsoft Graph-derived insights, between a user and other items in Microsoft 365, such as documents or sites. List itemInsights returns the settings to display or return item insights in an organization.
     * @return InsightsSettings|null
    */
    public function getItemInsights(): ?InsightsSettings {
        return $this->itemInsights;
    }

    /**
     * Gets the microsoftApplicationDataAccess property value. The microsoftApplicationDataAccess property
     * @return MicrosoftApplicationDataAccessSettings|null
    */
    public function getMicrosoftApplicationDataAccess(): ?MicrosoftApplicationDataAccessSettings {
        return $this->microsoftApplicationDataAccess;
    }

    /**
     * Gets the peopleInsights property value. Contains the properties that are configured by an administrator for the visibility of a list of people relevant and working with a user in Microsoft 365. List peopleInsights returns the settings to display or return people insights in an organization.
     * @return InsightsSettings|null
    */
    public function getPeopleInsights(): ?InsightsSettings {
        return $this->peopleInsights;
    }

    /**
     * Gets the profileCardProperties property value. Contains a collection of the properties an administrator has defined as visible on the Microsoft 365 profile card. Get organization settings returns the properties configured for profile cards for the organization.
     * @return array<ProfileCardProperty>|null
    */
    public function getProfileCardProperties(): ?array {
        return $this->profileCardProperties;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('itemInsights', $this->itemInsights);
        $writer->writeObjectValue('microsoftApplicationDataAccess', $this->microsoftApplicationDataAccess);
        $writer->writeObjectValue('peopleInsights', $this->peopleInsights);
        $writer->writeCollectionOfObjectValues('profileCardProperties', $this->profileCardProperties);
    }

    /**
     * Sets the itemInsights property value. Contains the properties that are configured by an administrator for the visibility of Microsoft Graph-derived insights, between a user and other items in Microsoft 365, such as documents or sites. List itemInsights returns the settings to display or return item insights in an organization.
     *  @param InsightsSettings|null $value Value to set for the itemInsights property.
    */
    public function setItemInsights(?InsightsSettings $value ): void {
        $this->itemInsights = $value;
    }

    /**
     * Sets the microsoftApplicationDataAccess property value. The microsoftApplicationDataAccess property
     *  @param MicrosoftApplicationDataAccessSettings|null $value Value to set for the microsoftApplicationDataAccess property.
    */
    public function setMicrosoftApplicationDataAccess(?MicrosoftApplicationDataAccessSettings $value ): void {
        $this->microsoftApplicationDataAccess = $value;
    }

    /**
     * Sets the peopleInsights property value. Contains the properties that are configured by an administrator for the visibility of a list of people relevant and working with a user in Microsoft 365. List peopleInsights returns the settings to display or return people insights in an organization.
     *  @param InsightsSettings|null $value Value to set for the peopleInsights property.
    */
    public function setPeopleInsights(?InsightsSettings $value ): void {
        $this->peopleInsights = $value;
    }

    /**
     * Sets the profileCardProperties property value. Contains a collection of the properties an administrator has defined as visible on the Microsoft 365 profile card. Get organization settings returns the properties configured for profile cards for the organization.
     *  @param array<ProfileCardProperty>|null $value Value to set for the profileCardProperties property.
    */
    public function setProfileCardProperties(?array $value ): void {
        $this->profileCardProperties = $value;
    }

}
