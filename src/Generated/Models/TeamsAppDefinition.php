<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsAppDefinition extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new teamsAppDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('allowedInstallationScopes');
        if (is_null($val) || $val instanceof TeamsAppInstallationScopes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedInstallationScopes'");
    }

    /**
     * Gets the authorization property value. Authorization requirements specified in the Teams app manifest.
     * @return TeamsAppAuthorization|null
    */
    public function getAuthorization(): ?TeamsAppAuthorization {
        $val = $this->getBackingStore()->get('authorization');
        if (is_null($val) || $val instanceof TeamsAppAuthorization) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authorization'");
    }

    /**
     * Gets the azureADAppId property value. The WebApplicationInfo.Id from the Teams app manifest.
     * @return string|null
    */
    public function getAzureADAppId(): ?string {
        $val = $this->getBackingStore()->get('azureADAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureADAppId'");
    }

    /**
     * Gets the bot property value. The details of the bot specified in the Teams app manifest.
     * @return TeamworkBot|null
    */
    public function getBot(): ?TeamworkBot {
        $val = $this->getBackingStore()->get('bot');
        if (is_null($val) || $val instanceof TeamworkBot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bot'");
    }

    /**
     * Gets the colorIcon property value. The color version of the Teams app's icon.
     * @return TeamsAppIcon|null
    */
    public function getColorIcon(): ?TeamsAppIcon {
        $val = $this->getBackingStore()->get('colorIcon');
        if (is_null($val) || $val instanceof TeamsAppIcon) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'colorIcon'");
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The name of the app provided by the app developer.
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
            'allowedInstallationScopes' => fn(ParseNode $n) => $o->setAllowedInstallationScopes($n->getEnumValue(TeamsAppInstallationScopes::class)),
            'authorization' => fn(ParseNode $n) => $o->setAuthorization($n->getObjectValue([TeamsAppAuthorization::class, 'createFromDiscriminatorValue'])),
            'azureADAppId' => fn(ParseNode $n) => $o->setAzureADAppId($n->getStringValue()),
            'bot' => fn(ParseNode $n) => $o->setBot($n->getObjectValue([TeamworkBot::class, 'createFromDiscriminatorValue'])),
            'colorIcon' => fn(ParseNode $n) => $o->setColorIcon($n->getObjectValue([TeamsAppIcon::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'outlineIcon' => fn(ParseNode $n) => $o->setOutlineIcon($n->getObjectValue([TeamsAppIcon::class, 'createFromDiscriminatorValue'])),
            'publishingState' => fn(ParseNode $n) => $o->setPublishingState($n->getEnumValue(TeamsAppPublishingState::class)),
            'shortdescription' => fn(ParseNode $n) => $o->setShortdescription($n->getStringValue()),
            'teamsAppId' => fn(ParseNode $n) => $o->setTeamsAppId($n->getStringValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the outlineIcon property value. The outline version of the Teams app's icon.
     * @return TeamsAppIcon|null
    */
    public function getOutlineIcon(): ?TeamsAppIcon {
        $val = $this->getBackingStore()->get('outlineIcon');
        if (is_null($val) || $val instanceof TeamsAppIcon) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'outlineIcon'");
    }

    /**
     * Gets the publishingState property value. The published status of a specific version of a Teams app. Possible values are:submitted — The specific version of the Teams app has been submitted and is under review. published  — The request to publish the specific version of the Teams app has been approved by the admin and the app is published.  rejected — The request to publish the specific version of the Teams app was rejected by the admin.
     * @return TeamsAppPublishingState|null
    */
    public function getPublishingState(): ?TeamsAppPublishingState {
        $val = $this->getBackingStore()->get('publishingState');
        if (is_null($val) || $val instanceof TeamsAppPublishingState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publishingState'");
    }

    /**
     * Gets the shortdescription property value. The shortdescription property
     * @return string|null
    */
    public function getShortdescription(): ?string {
        $val = $this->getBackingStore()->get('shortdescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shortdescription'");
    }

    /**
     * Gets the teamsAppId property value. The ID from the Teams app manifest.
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
     * Gets the version property value. The version number of the application.
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('allowedInstallationScopes', $this->getAllowedInstallationScopes());
        $writer->writeObjectValue('authorization', $this->getAuthorization());
        $writer->writeStringValue('azureADAppId', $this->getAzureADAppId());
        $writer->writeObjectValue('bot', $this->getBot());
        $writer->writeObjectValue('colorIcon', $this->getColorIcon());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('outlineIcon', $this->getOutlineIcon());
        $writer->writeEnumValue('publishingState', $this->getPublishingState());
        $writer->writeStringValue('shortdescription', $this->getShortdescription());
        $writer->writeStringValue('teamsAppId', $this->getTeamsAppId());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the allowedInstallationScopes property value. A collection of scopes where the Teams app can be installed. Possible values are:team — Indicates that the Teams app can be installed within a team and is authorized to access that team's data. groupChat  — Indicates that the Teams app can be installed within a group chat and is authorized to access that group chat's data.  personal — Indicates that the Teams app can be installed in the personal scope of a user and is authorized to access that user's data.
     * @param TeamsAppInstallationScopes|null $value Value to set for the allowedInstallationScopes property.
    */
    public function setAllowedInstallationScopes(?TeamsAppInstallationScopes $value): void {
        $this->getBackingStore()->set('allowedInstallationScopes', $value);
    }

    /**
     * Sets the authorization property value. Authorization requirements specified in the Teams app manifest.
     * @param TeamsAppAuthorization|null $value Value to set for the authorization property.
    */
    public function setAuthorization(?TeamsAppAuthorization $value): void {
        $this->getBackingStore()->set('authorization', $value);
    }

    /**
     * Sets the azureADAppId property value. The WebApplicationInfo.Id from the Teams app manifest.
     * @param string|null $value Value to set for the azureADAppId property.
    */
    public function setAzureADAppId(?string $value): void {
        $this->getBackingStore()->set('azureADAppId', $value);
    }

    /**
     * Sets the bot property value. The details of the bot specified in the Teams app manifest.
     * @param TeamworkBot|null $value Value to set for the bot property.
    */
    public function setBot(?TeamworkBot $value): void {
        $this->getBackingStore()->set('bot', $value);
    }

    /**
     * Sets the colorIcon property value. The color version of the Teams app's icon.
     * @param TeamsAppIcon|null $value Value to set for the colorIcon property.
    */
    public function setColorIcon(?TeamsAppIcon $value): void {
        $this->getBackingStore()->set('colorIcon', $value);
    }

    /**
     * Sets the createdBy property value. The createdBy property
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The name of the app provided by the app developer.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the outlineIcon property value. The outline version of the Teams app's icon.
     * @param TeamsAppIcon|null $value Value to set for the outlineIcon property.
    */
    public function setOutlineIcon(?TeamsAppIcon $value): void {
        $this->getBackingStore()->set('outlineIcon', $value);
    }

    /**
     * Sets the publishingState property value. The published status of a specific version of a Teams app. Possible values are:submitted — The specific version of the Teams app has been submitted and is under review. published  — The request to publish the specific version of the Teams app has been approved by the admin and the app is published.  rejected — The request to publish the specific version of the Teams app was rejected by the admin.
     * @param TeamsAppPublishingState|null $value Value to set for the publishingState property.
    */
    public function setPublishingState(?TeamsAppPublishingState $value): void {
        $this->getBackingStore()->set('publishingState', $value);
    }

    /**
     * Sets the shortdescription property value. The shortdescription property
     * @param string|null $value Value to set for the shortdescription property.
    */
    public function setShortdescription(?string $value): void {
        $this->getBackingStore()->set('shortdescription', $value);
    }

    /**
     * Sets the teamsAppId property value. The ID from the Teams app manifest.
     * @param string|null $value Value to set for the teamsAppId property.
    */
    public function setTeamsAppId(?string $value): void {
        $this->getBackingStore()->set('teamsAppId', $value);
    }

    /**
     * Sets the version property value. The version number of the application.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
