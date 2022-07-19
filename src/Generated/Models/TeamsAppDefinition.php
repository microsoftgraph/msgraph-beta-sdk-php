<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsAppDefinition extends Entity implements Parsable 
{
    /**
     * @var TeamsAppInstallationScopes|null $allowedInstallationScopes A collection of scopes where the Teams app can be installed. Possible values are:team — Indicates that the Teams app can be installed within a team and is authorized to access that team's data. groupChat  — Indicates that the Teams app can be installed within a group chat and is authorized to access that group chat's data.  personal — Indicates that the Teams app can be installed in the personal scope of a user and is authorized to access that user's data.
    */
    private ?TeamsAppInstallationScopes $allowedInstallationScopes = null;
    
    /**
     * @var string|null $azureADAppId The WebApplicationInfo.Id from the Teams app manifest.
    */
    private ?string $azureADAppId = null;
    
    /**
     * @var TeamworkBot|null $bot The details of the bot specified in the Teams app manifest.
    */
    private ?TeamworkBot $bot = null;
    
    /**
     * @var TeamsAppIcon|null $colorIcon The color version of the Teams app's icon.
    */
    private ?TeamsAppIcon $colorIcon = null;
    
    /**
     * @var IdentitySet|null $createdBy The createdBy property
    */
    private ?IdentitySet $createdBy = null;
    
    /**
     * @var string|null $description Verbose description of the application.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The name of the app provided by the app developer.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var TeamsAppIcon|null $outlineIcon The outline version of the Teams app's icon.
    */
    private ?TeamsAppIcon $outlineIcon = null;
    
    /**
     * @var TeamsAppPublishingState|null $publishingState The published status of a specific version of a Teams app. Possible values are:submitted — The specific version of the Teams app has been submitted and is under review. published  — The request to publish the specific version of the Teams app has been approved by the admin and the app is published.  rejected — The request to publish the specific version of the Teams app was rejected by the admin.
    */
    private ?TeamsAppPublishingState $publishingState = null;
    
    /**
     * @var string|null $shortdescription The shortdescription property
    */
    private ?string $shortdescription = null;
    
    /**
     * @var string|null $teamsAppId The ID from the Teams app manifest.
    */
    private ?string $teamsAppId = null;
    
    /**
     * @var string|null $version The version number of the application.
    */
    private ?string $version = null;
    
    /**
     * Instantiates a new teamsAppDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.teamsAppDefinition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsAppDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsAppDefinition {
        return new TeamsAppDefinition();
    }

    /**
     * Gets the allowedInstallationScopes property value. A collection of scopes where the Teams app can be installed. Possible values are:team — Indicates that the Teams app can be installed within a team and is authorized to access that team's data. groupChat  — Indicates that the Teams app can be installed within a group chat and is authorized to access that group chat's data.  personal — Indicates that the Teams app can be installed in the personal scope of a user and is authorized to access that user's data.
     * @return TeamsAppInstallationScopes|null
    */
    public function getAllowedInstallationScopes(): ?TeamsAppInstallationScopes {
        return $this->allowedInstallationScopes;
    }

    /**
     * Gets the azureADAppId property value. The WebApplicationInfo.Id from the Teams app manifest.
     * @return string|null
    */
    public function getAzureADAppId(): ?string {
        return $this->azureADAppId;
    }

    /**
     * Gets the bot property value. The details of the bot specified in the Teams app manifest.
     * @return TeamworkBot|null
    */
    public function getBot(): ?TeamworkBot {
        return $this->bot;
    }

    /**
     * Gets the colorIcon property value. The color version of the Teams app's icon.
     * @return TeamsAppIcon|null
    */
    public function getColorIcon(): ?TeamsAppIcon {
        return $this->colorIcon;
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the description property value. Verbose description of the application.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The name of the app provided by the app developer.
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
            'allowedInstallationScopes' => function (ParseNode $n) use ($o) { $o->setAllowedInstallationScopes($n->getEnumValue(TeamsAppInstallationScopes::class)); },
            'azureADAppId' => function (ParseNode $n) use ($o) { $o->setAzureADAppId($n->getStringValue()); },
            'bot' => function (ParseNode $n) use ($o) { $o->setBot($n->getObjectValue(array(TeamworkBot::class, 'createFromDiscriminatorValue'))); },
            'colorIcon' => function (ParseNode $n) use ($o) { $o->setColorIcon($n->getObjectValue(array(TeamsAppIcon::class, 'createFromDiscriminatorValue'))); },
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'outlineIcon' => function (ParseNode $n) use ($o) { $o->setOutlineIcon($n->getObjectValue(array(TeamsAppIcon::class, 'createFromDiscriminatorValue'))); },
            'publishingState' => function (ParseNode $n) use ($o) { $o->setPublishingState($n->getEnumValue(TeamsAppPublishingState::class)); },
            'shortdescription' => function (ParseNode $n) use ($o) { $o->setShortdescription($n->getStringValue()); },
            'teamsAppId' => function (ParseNode $n) use ($o) { $o->setTeamsAppId($n->getStringValue()); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the outlineIcon property value. The outline version of the Teams app's icon.
     * @return TeamsAppIcon|null
    */
    public function getOutlineIcon(): ?TeamsAppIcon {
        return $this->outlineIcon;
    }

    /**
     * Gets the publishingState property value. The published status of a specific version of a Teams app. Possible values are:submitted — The specific version of the Teams app has been submitted and is under review. published  — The request to publish the specific version of the Teams app has been approved by the admin and the app is published.  rejected — The request to publish the specific version of the Teams app was rejected by the admin.
     * @return TeamsAppPublishingState|null
    */
    public function getPublishingState(): ?TeamsAppPublishingState {
        return $this->publishingState;
    }

    /**
     * Gets the shortdescription property value. The shortdescription property
     * @return string|null
    */
    public function getShortdescription(): ?string {
        return $this->shortdescription;
    }

    /**
     * Gets the teamsAppId property value. The ID from the Teams app manifest.
     * @return string|null
    */
    public function getTeamsAppId(): ?string {
        return $this->teamsAppId;
    }

    /**
     * Gets the version property value. The version number of the application.
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('allowedInstallationScopes', $this->allowedInstallationScopes);
        $writer->writeStringValue('azureADAppId', $this->azureADAppId);
        $writer->writeObjectValue('bot', $this->bot);
        $writer->writeObjectValue('colorIcon', $this->colorIcon);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeObjectValue('outlineIcon', $this->outlineIcon);
        $writer->writeEnumValue('publishingState', $this->publishingState);
        $writer->writeStringValue('shortdescription', $this->shortdescription);
        $writer->writeStringValue('teamsAppId', $this->teamsAppId);
        $writer->writeStringValue('version', $this->version);
    }

    /**
     * Sets the allowedInstallationScopes property value. A collection of scopes where the Teams app can be installed. Possible values are:team — Indicates that the Teams app can be installed within a team and is authorized to access that team's data. groupChat  — Indicates that the Teams app can be installed within a group chat and is authorized to access that group chat's data.  personal — Indicates that the Teams app can be installed in the personal scope of a user and is authorized to access that user's data.
     *  @param TeamsAppInstallationScopes|null $value Value to set for the allowedInstallationScopes property.
    */
    public function setAllowedInstallationScopes(?TeamsAppInstallationScopes $value ): void {
        $this->allowedInstallationScopes = $value;
    }

    /**
     * Sets the azureADAppId property value. The WebApplicationInfo.Id from the Teams app manifest.
     *  @param string|null $value Value to set for the azureADAppId property.
    */
    public function setAzureADAppId(?string $value ): void {
        $this->azureADAppId = $value;
    }

    /**
     * Sets the bot property value. The details of the bot specified in the Teams app manifest.
     *  @param TeamworkBot|null $value Value to set for the bot property.
    */
    public function setBot(?TeamworkBot $value ): void {
        $this->bot = $value;
    }

    /**
     * Sets the colorIcon property value. The color version of the Teams app's icon.
     *  @param TeamsAppIcon|null $value Value to set for the colorIcon property.
    */
    public function setColorIcon(?TeamsAppIcon $value ): void {
        $this->colorIcon = $value;
    }

    /**
     * Sets the createdBy property value. The createdBy property
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the description property value. Verbose description of the application.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The name of the app provided by the app developer.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the outlineIcon property value. The outline version of the Teams app's icon.
     *  @param TeamsAppIcon|null $value Value to set for the outlineIcon property.
    */
    public function setOutlineIcon(?TeamsAppIcon $value ): void {
        $this->outlineIcon = $value;
    }

    /**
     * Sets the publishingState property value. The published status of a specific version of a Teams app. Possible values are:submitted — The specific version of the Teams app has been submitted and is under review. published  — The request to publish the specific version of the Teams app has been approved by the admin and the app is published.  rejected — The request to publish the specific version of the Teams app was rejected by the admin.
     *  @param TeamsAppPublishingState|null $value Value to set for the publishingState property.
    */
    public function setPublishingState(?TeamsAppPublishingState $value ): void {
        $this->publishingState = $value;
    }

    /**
     * Sets the shortdescription property value. The shortdescription property
     *  @param string|null $value Value to set for the shortdescription property.
    */
    public function setShortdescription(?string $value ): void {
        $this->shortdescription = $value;
    }

    /**
     * Sets the teamsAppId property value. The ID from the Teams app manifest.
     *  @param string|null $value Value to set for the teamsAppId property.
    */
    public function setTeamsAppId(?string $value ): void {
        $this->teamsAppId = $value;
    }

    /**
     * Sets the version property value. The version number of the application.
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}
