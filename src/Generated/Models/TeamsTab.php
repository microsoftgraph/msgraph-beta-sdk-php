<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsTab extends Entity implements Parsable 
{
    /**
     * @var TeamsTabConfiguration|null $configuration Container for custom settings applied to a tab. The tab is considered configured only once this property is set.
    */
    private ?TeamsTabConfiguration $configuration = null;
    
    /**
     * @var string|null $displayName Name of the tab.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $messageId The messageId property
    */
    private ?string $messageId = null;
    
    /**
     * @var string|null $sortOrderIndex Index of the order used for sorting tabs.
    */
    private ?string $sortOrderIndex = null;
    
    /**
     * @var TeamsApp|null $teamsApp The application that is linked to the tab.
    */
    private ?TeamsApp $teamsApp = null;
    
    /**
     * @var string|null $teamsAppId The teamsAppId property
    */
    private ?string $teamsAppId = null;
    
    /**
     * @var string|null $webUrl Deep link URL of the tab instance. Read only.
    */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new teamsTab and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.teamsTab');
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
        return $this->configuration;
    }

    /**
     * Gets the displayName property value. Name of the tab.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configuration' => function (ParseNode $n) use ($o) { $o->setConfiguration($n->getObjectValue(array(TeamsTabConfiguration::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'messageId' => function (ParseNode $n) use ($o) { $o->setMessageId($n->getStringValue()); },
            'sortOrderIndex' => function (ParseNode $n) use ($o) { $o->setSortOrderIndex($n->getStringValue()); },
            'teamsApp' => function (ParseNode $n) use ($o) { $o->setTeamsApp($n->getObjectValue(array(TeamsApp::class, 'createFromDiscriminatorValue'))); },
            'teamsAppId' => function (ParseNode $n) use ($o) { $o->setTeamsAppId($n->getStringValue()); },
            'webUrl' => function (ParseNode $n) use ($o) { $o->setWebUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the messageId property value. The messageId property
     * @return string|null
    */
    public function getMessageId(): ?string {
        return $this->messageId;
    }

    /**
     * Gets the sortOrderIndex property value. Index of the order used for sorting tabs.
     * @return string|null
    */
    public function getSortOrderIndex(): ?string {
        return $this->sortOrderIndex;
    }

    /**
     * Gets the teamsApp property value. The application that is linked to the tab.
     * @return TeamsApp|null
    */
    public function getTeamsApp(): ?TeamsApp {
        return $this->teamsApp;
    }

    /**
     * Gets the teamsAppId property value. The teamsAppId property
     * @return string|null
    */
    public function getTeamsAppId(): ?string {
        return $this->teamsAppId;
    }

    /**
     * Gets the webUrl property value. Deep link URL of the tab instance. Read only.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->webUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('configuration', $this->configuration);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('messageId', $this->messageId);
        $writer->writeStringValue('sortOrderIndex', $this->sortOrderIndex);
        $writer->writeObjectValue('teamsApp', $this->teamsApp);
        $writer->writeStringValue('teamsAppId', $this->teamsAppId);
        $writer->writeStringValue('webUrl', $this->webUrl);
    }

    /**
     * Sets the configuration property value. Container for custom settings applied to a tab. The tab is considered configured only once this property is set.
     *  @param TeamsTabConfiguration|null $value Value to set for the configuration property.
    */
    public function setConfiguration(?TeamsTabConfiguration $value ): void {
        $this->configuration = $value;
    }

    /**
     * Sets the displayName property value. Name of the tab.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the messageId property value. The messageId property
     *  @param string|null $value Value to set for the messageId property.
    */
    public function setMessageId(?string $value ): void {
        $this->messageId = $value;
    }

    /**
     * Sets the sortOrderIndex property value. Index of the order used for sorting tabs.
     *  @param string|null $value Value to set for the sortOrderIndex property.
    */
    public function setSortOrderIndex(?string $value ): void {
        $this->sortOrderIndex = $value;
    }

    /**
     * Sets the teamsApp property value. The application that is linked to the tab.
     *  @param TeamsApp|null $value Value to set for the teamsApp property.
    */
    public function setTeamsApp(?TeamsApp $value ): void {
        $this->teamsApp = $value;
    }

    /**
     * Sets the teamsAppId property value. The teamsAppId property
     *  @param string|null $value Value to set for the teamsAppId property.
    */
    public function setTeamsAppId(?string $value ): void {
        $this->teamsAppId = $value;
    }

    /**
     * Sets the webUrl property value. Deep link URL of the tab instance. Read only.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
