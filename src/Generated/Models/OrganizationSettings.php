<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OrganizationSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new OrganizationSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('contactInsights');
        if (is_null($val) || $val instanceof InsightsSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contactInsights'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contactInsights' => fn(ParseNode $n) => $o->setContactInsights($n->getObjectValue([InsightsSettings::class, 'createFromDiscriminatorValue'])),
            'itemInsights' => fn(ParseNode $n) => $o->setItemInsights($n->getObjectValue([InsightsSettings::class, 'createFromDiscriminatorValue'])),
            'microsoftApplicationDataAccess' => fn(ParseNode $n) => $o->setMicrosoftApplicationDataAccess($n->getObjectValue([MicrosoftApplicationDataAccessSettings::class, 'createFromDiscriminatorValue'])),
            'peopleInsights' => fn(ParseNode $n) => $o->setPeopleInsights($n->getObjectValue([InsightsSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the itemInsights property value. Contains the properties that are configured by an administrator for the visibility of Microsoft Graph-derived insights, between a user and other items in Microsoft 365, such as documents or sites. List itemInsights returns the settings to display or return item insights in an organization.
     * @return InsightsSettings|null
    */
    public function getItemInsights(): ?InsightsSettings {
        $val = $this->getBackingStore()->get('itemInsights');
        if (is_null($val) || $val instanceof InsightsSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'itemInsights'");
    }

    /**
     * Gets the microsoftApplicationDataAccess property value. The microsoftApplicationDataAccess property
     * @return MicrosoftApplicationDataAccessSettings|null
    */
    public function getMicrosoftApplicationDataAccess(): ?MicrosoftApplicationDataAccessSettings {
        $val = $this->getBackingStore()->get('microsoftApplicationDataAccess');
        if (is_null($val) || $val instanceof MicrosoftApplicationDataAccessSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftApplicationDataAccess'");
    }

    /**
     * Gets the peopleInsights property value. Contains the properties that are configured by an administrator for the visibility of a list of people relevant and working with a user in Microsoft 365. List peopleInsights returns the settings to display or return people insights in an organization.
     * @return InsightsSettings|null
    */
    public function getPeopleInsights(): ?InsightsSettings {
        $val = $this->getBackingStore()->get('peopleInsights');
        if (is_null($val) || $val instanceof InsightsSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'peopleInsights'");
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
    }

    /**
     * Sets the contactInsights property value. Contains the properties that are configured by an administrator as a tenant-level privacy control whether to identify duplicate contacts among a user's contacts list and suggest the user to merge those contacts to have a cleaner contacts list. List contactInsights returns the settings to display or return contact insights in an organization.
     * @param InsightsSettings|null $value Value to set for the contactInsights property.
    */
    public function setContactInsights(?InsightsSettings $value): void {
        $this->getBackingStore()->set('contactInsights', $value);
    }

    /**
     * Sets the itemInsights property value. Contains the properties that are configured by an administrator for the visibility of Microsoft Graph-derived insights, between a user and other items in Microsoft 365, such as documents or sites. List itemInsights returns the settings to display or return item insights in an organization.
     * @param InsightsSettings|null $value Value to set for the itemInsights property.
    */
    public function setItemInsights(?InsightsSettings $value): void {
        $this->getBackingStore()->set('itemInsights', $value);
    }

    /**
     * Sets the microsoftApplicationDataAccess property value. The microsoftApplicationDataAccess property
     * @param MicrosoftApplicationDataAccessSettings|null $value Value to set for the microsoftApplicationDataAccess property.
    */
    public function setMicrosoftApplicationDataAccess(?MicrosoftApplicationDataAccessSettings $value): void {
        $this->getBackingStore()->set('microsoftApplicationDataAccess', $value);
    }

    /**
     * Sets the peopleInsights property value. Contains the properties that are configured by an administrator for the visibility of a list of people relevant and working with a user in Microsoft 365. List peopleInsights returns the settings to display or return people insights in an organization.
     * @param InsightsSettings|null $value Value to set for the peopleInsights property.
    */
    public function setPeopleInsights(?InsightsSettings $value): void {
        $this->getBackingStore()->set('peopleInsights', $value);
    }

}
