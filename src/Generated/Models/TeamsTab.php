<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsTab extends Entity implements Parsable 
{
    /**
     * Instantiates a new teamsTab and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsTab
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsTab {
        return new TeamsTab();
    }

    /**
     * Gets the configuration property value. Container for custom settings applied to a tab. The tab is considered configured only once this property is set.
     * @return TeamsTabConfiguration|null
    */
    public function getConfiguration(): ?TeamsTabConfiguration {
        $val = $this->getBackingStore()->get('configuration');
        if (is_null($val) || $val instanceof TeamsTabConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configuration'");
    }

    /**
     * Gets the displayName property value. Name of the tab.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configuration' => fn(ParseNode $n) => $o->setConfiguration($n->getObjectValue([TeamsTabConfiguration::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'messageId' => fn(ParseNode $n) => $o->setMessageId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sortOrderIndex' => fn(ParseNode $n) => $o->setSortOrderIndex($n->getStringValue()),
            'teamsApp' => fn(ParseNode $n) => $o->setTeamsApp($n->getObjectValue([TeamsApp::class, 'createFromDiscriminatorValue'])),
            'teamsAppId' => fn(ParseNode $n) => $o->setTeamsAppId($n->getStringValue()),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the messageId property value. The messageId property
     * @return string|null
    */
    public function getMessageId(): ?string {
        $val = $this->getBackingStore()->get('messageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messageId'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the sortOrderIndex property value. Index of the order used for sorting tabs.
     * @return string|null
    */
    public function getSortOrderIndex(): ?string {
        $val = $this->getBackingStore()->get('sortOrderIndex');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sortOrderIndex'");
    }

    /**
     * Gets the teamsApp property value. The application that is linked to the tab.
     * @return TeamsApp|null
    */
    public function getTeamsApp(): ?TeamsApp {
        $val = $this->getBackingStore()->get('teamsApp');
        if (is_null($val) || $val instanceof TeamsApp) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamsApp'");
    }

    /**
     * Gets the teamsAppId property value. The teamsAppId property
     * @return string|null
    */
    public function getTeamsAppId(): ?string {
        $val = $this->getBackingStore()->get('teamsAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamsAppId'");
    }

    /**
     * Gets the webUrl property value. Deep link URL of the tab instance. Read only.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        $val = $this->getBackingStore()->get('webUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('configuration', $this->getConfiguration());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('messageId', $this->getMessageId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('sortOrderIndex', $this->getSortOrderIndex());
        $writer->writeObjectValue('teamsApp', $this->getTeamsApp());
        $writer->writeStringValue('teamsAppId', $this->getTeamsAppId());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
    }

    /**
     * Sets the configuration property value. Container for custom settings applied to a tab. The tab is considered configured only once this property is set.
     * @param TeamsTabConfiguration|null $value Value to set for the configuration property.
    */
    public function setConfiguration(?TeamsTabConfiguration $value): void {
        $this->getBackingStore()->set('configuration', $value);
    }

    /**
     * Sets the displayName property value. Name of the tab.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the messageId property value. The messageId property
     * @param string|null $value Value to set for the messageId property.
    */
    public function setMessageId(?string $value): void {
        $this->getBackingStore()->set('messageId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sortOrderIndex property value. Index of the order used for sorting tabs.
     * @param string|null $value Value to set for the sortOrderIndex property.
    */
    public function setSortOrderIndex(?string $value): void {
        $this->getBackingStore()->set('sortOrderIndex', $value);
    }

    /**
     * Sets the teamsApp property value. The application that is linked to the tab.
     * @param TeamsApp|null $value Value to set for the teamsApp property.
    */
    public function setTeamsApp(?TeamsApp $value): void {
        $this->getBackingStore()->set('teamsApp', $value);
    }

    /**
     * Sets the teamsAppId property value. The teamsAppId property
     * @param string|null $value Value to set for the teamsAppId property.
    */
    public function setTeamsAppId(?string $value): void {
        $this->getBackingStore()->set('teamsAppId', $value);
    }

    /**
     * Sets the webUrl property value. Deep link URL of the tab instance. Read only.
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
