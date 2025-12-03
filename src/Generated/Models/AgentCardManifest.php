<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AgentCardManifest extends Entity implements Parsable 
{
    /**
     * Instantiates a new AgentCardManifest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgentCardManifest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgentCardManifest {
        return new AgentCardManifest();
    }

    /**
     * Gets the capabilities property value. The capabilities property
     * @return AgentCapabilities|null
    */
    public function getCapabilities(): ?AgentCapabilities {
        $val = $this->getBackingStore()->get('capabilities');
        if (is_null($val) || $val instanceof AgentCapabilities) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'capabilities'");
    }

    /**
     * Gets the createdBy property value. Object ID of the user or application that created the agent card manifest. Read-only.
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. When this agent card manifest was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the defaultInputModes property value. Default set of supported input MIME types for all skills, which can be overridden on a per-skill basis.
     * @return array<string>|null
    */
    public function getDefaultInputModes(): ?array {
        $val = $this->getBackingStore()->get('defaultInputModes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultInputModes'");
    }

    /**
     * Gets the defaultOutputModes property value. Default set of supported output MIME types for all skills, which can be overridden on a per-skill basis.
     * @return array<string>|null
    */
    public function getDefaultOutputModes(): ?array {
        $val = $this->getBackingStore()->get('defaultOutputModes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultOutputModes'");
    }

    /**
     * Gets the description property value. A human-readable description of the agent.
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
     * Gets the displayName property value. A human-readable display name of the agent.
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
     * Gets the documentationUrl property value. URL to agent's documentation.
     * @return string|null
    */
    public function getDocumentationUrl(): ?string {
        $val = $this->getBackingStore()->get('documentationUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'documentationUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'capabilities' => fn(ParseNode $n) => $o->setCapabilities($n->getObjectValue([AgentCapabilities::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'defaultInputModes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDefaultInputModes($val);
            },
            'defaultOutputModes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDefaultOutputModes($val);
            },
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'documentationUrl' => fn(ParseNode $n) => $o->setDocumentationUrl($n->getStringValue()),
            'iconUrl' => fn(ParseNode $n) => $o->setIconUrl($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'managedBy' => fn(ParseNode $n) => $o->setManagedBy($n->getStringValue()),
            'originatingStore' => fn(ParseNode $n) => $o->setOriginatingStore($n->getStringValue()),
            'ownerIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOwnerIds($val);
            },
            'protocolVersion' => fn(ParseNode $n) => $o->setProtocolVersion($n->getStringValue()),
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getObjectValue([AgentProvider::class, 'createFromDiscriminatorValue'])),
            'security' => fn(ParseNode $n) => $o->setSecurity($n->getCollectionOfObjectValues([SecurityRequirement::class, 'createFromDiscriminatorValue'])),
            'securitySchemes' => fn(ParseNode $n) => $o->setSecuritySchemes($n->getObjectValue([SecuritySchemes::class, 'createFromDiscriminatorValue'])),
            'skills' => fn(ParseNode $n) => $o->setSkills($n->getCollectionOfObjectValues([AgentSkill::class, 'createFromDiscriminatorValue'])),
            'supportsAuthenticatedExtendedCard' => fn(ParseNode $n) => $o->setSupportsAuthenticatedExtendedCard($n->getBooleanValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the iconUrl property value. URL to agent's icon image.
     * @return string|null
    */
    public function getIconUrl(): ?string {
        $val = $this->getBackingStore()->get('iconUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iconUrl'");
    }

    /**
     * Gets the lastModifiedDateTime property value. When this agent card manifest was last modified.
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
     * Gets the managedBy property value. appId (referred to as Application (client) ID on the Microsoft Entra admin center) of the application managing this agent manifest.
     * @return string|null
    */
    public function getManagedBy(): ?string {
        $val = $this->getBackingStore()->get('managedBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedBy'");
    }

    /**
     * Gets the originatingStore property value. Name of the store/system where agent originated. For example Copilot Studio.
     * @return string|null
    */
    public function getOriginatingStore(): ?string {
        $val = $this->getBackingStore()->get('originatingStore');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originatingStore'");
    }

    /**
     * Gets the ownerIds property value. List of object IDs for the owners of the agent card manifest.
     * @return array<string>|null
    */
    public function getOwnerIds(): ?array {
        $val = $this->getBackingStore()->get('ownerIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ownerIds'");
    }

    /**
     * Gets the protocolVersion property value. Protocol version supported by the agent.
     * @return string|null
    */
    public function getProtocolVersion(): ?string {
        $val = $this->getBackingStore()->get('protocolVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protocolVersion'");
    }

    /**
     * Gets the provider property value. Information about the organization providing the agent.
     * @return AgentProvider|null
    */
    public function getProvider(): ?AgentProvider {
        $val = $this->getBackingStore()->get('provider');
        if (is_null($val) || $val instanceof AgentProvider) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provider'");
    }

    /**
     * Gets the security property value. Security requirements - array of security scheme references.
     * @return array<SecurityRequirement>|null
    */
    public function getSecurity(): ?array {
        $val = $this->getBackingStore()->get('security');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SecurityRequirement::class);
            /** @var array<SecurityRequirement>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'security'");
    }

    /**
     * Gets the securitySchemes property value. Dictionary of security scheme definitions keyed by scheme name.
     * @return SecuritySchemes|null
    */
    public function getSecuritySchemes(): ?SecuritySchemes {
        $val = $this->getBackingStore()->get('securitySchemes');
        if (is_null($val) || $val instanceof SecuritySchemes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securitySchemes'");
    }

    /**
     * Gets the skills property value. Skills/capabilities that the agent can perform
     * @return array<AgentSkill>|null
    */
    public function getSkills(): ?array {
        $val = $this->getBackingStore()->get('skills');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AgentSkill::class);
            /** @var array<AgentSkill>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skills'");
    }

    /**
     * Gets the supportsAuthenticatedExtendedCard property value. Whether agent supports authenticated extended card retrieval
     * @return bool|null
    */
    public function getSupportsAuthenticatedExtendedCard(): ?bool {
        $val = $this->getBackingStore()->get('supportsAuthenticatedExtendedCard');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportsAuthenticatedExtendedCard'");
    }

    /**
     * Gets the version property value. Version of the agent implementation
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
        $writer->writeObjectValue('capabilities', $this->getCapabilities());
        $writer->writeStringValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfPrimitiveValues('defaultInputModes', $this->getDefaultInputModes());
        $writer->writeCollectionOfPrimitiveValues('defaultOutputModes', $this->getDefaultOutputModes());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('documentationUrl', $this->getDocumentationUrl());
        $writer->writeStringValue('iconUrl', $this->getIconUrl());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('managedBy', $this->getManagedBy());
        $writer->writeStringValue('originatingStore', $this->getOriginatingStore());
        $writer->writeCollectionOfPrimitiveValues('ownerIds', $this->getOwnerIds());
        $writer->writeStringValue('protocolVersion', $this->getProtocolVersion());
        $writer->writeObjectValue('provider', $this->getProvider());
        $writer->writeCollectionOfObjectValues('security', $this->getSecurity());
        $writer->writeObjectValue('securitySchemes', $this->getSecuritySchemes());
        $writer->writeCollectionOfObjectValues('skills', $this->getSkills());
        $writer->writeBooleanValue('supportsAuthenticatedExtendedCard', $this->getSupportsAuthenticatedExtendedCard());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the capabilities property value. The capabilities property
     * @param AgentCapabilities|null $value Value to set for the capabilities property.
    */
    public function setCapabilities(?AgentCapabilities $value): void {
        $this->getBackingStore()->set('capabilities', $value);
    }

    /**
     * Sets the createdBy property value. Object ID of the user or application that created the agent card manifest. Read-only.
     * @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. When this agent card manifest was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the defaultInputModes property value. Default set of supported input MIME types for all skills, which can be overridden on a per-skill basis.
     * @param array<string>|null $value Value to set for the defaultInputModes property.
    */
    public function setDefaultInputModes(?array $value): void {
        $this->getBackingStore()->set('defaultInputModes', $value);
    }

    /**
     * Sets the defaultOutputModes property value. Default set of supported output MIME types for all skills, which can be overridden on a per-skill basis.
     * @param array<string>|null $value Value to set for the defaultOutputModes property.
    */
    public function setDefaultOutputModes(?array $value): void {
        $this->getBackingStore()->set('defaultOutputModes', $value);
    }

    /**
     * Sets the description property value. A human-readable description of the agent.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. A human-readable display name of the agent.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the documentationUrl property value. URL to agent's documentation.
     * @param string|null $value Value to set for the documentationUrl property.
    */
    public function setDocumentationUrl(?string $value): void {
        $this->getBackingStore()->set('documentationUrl', $value);
    }

    /**
     * Sets the iconUrl property value. URL to agent's icon image.
     * @param string|null $value Value to set for the iconUrl property.
    */
    public function setIconUrl(?string $value): void {
        $this->getBackingStore()->set('iconUrl', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. When this agent card manifest was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the managedBy property value. appId (referred to as Application (client) ID on the Microsoft Entra admin center) of the application managing this agent manifest.
     * @param string|null $value Value to set for the managedBy property.
    */
    public function setManagedBy(?string $value): void {
        $this->getBackingStore()->set('managedBy', $value);
    }

    /**
     * Sets the originatingStore property value. Name of the store/system where agent originated. For example Copilot Studio.
     * @param string|null $value Value to set for the originatingStore property.
    */
    public function setOriginatingStore(?string $value): void {
        $this->getBackingStore()->set('originatingStore', $value);
    }

    /**
     * Sets the ownerIds property value. List of object IDs for the owners of the agent card manifest.
     * @param array<string>|null $value Value to set for the ownerIds property.
    */
    public function setOwnerIds(?array $value): void {
        $this->getBackingStore()->set('ownerIds', $value);
    }

    /**
     * Sets the protocolVersion property value. Protocol version supported by the agent.
     * @param string|null $value Value to set for the protocolVersion property.
    */
    public function setProtocolVersion(?string $value): void {
        $this->getBackingStore()->set('protocolVersion', $value);
    }

    /**
     * Sets the provider property value. Information about the organization providing the agent.
     * @param AgentProvider|null $value Value to set for the provider property.
    */
    public function setProvider(?AgentProvider $value): void {
        $this->getBackingStore()->set('provider', $value);
    }

    /**
     * Sets the security property value. Security requirements - array of security scheme references.
     * @param array<SecurityRequirement>|null $value Value to set for the security property.
    */
    public function setSecurity(?array $value): void {
        $this->getBackingStore()->set('security', $value);
    }

    /**
     * Sets the securitySchemes property value. Dictionary of security scheme definitions keyed by scheme name.
     * @param SecuritySchemes|null $value Value to set for the securitySchemes property.
    */
    public function setSecuritySchemes(?SecuritySchemes $value): void {
        $this->getBackingStore()->set('securitySchemes', $value);
    }

    /**
     * Sets the skills property value. Skills/capabilities that the agent can perform
     * @param array<AgentSkill>|null $value Value to set for the skills property.
    */
    public function setSkills(?array $value): void {
        $this->getBackingStore()->set('skills', $value);
    }

    /**
     * Sets the supportsAuthenticatedExtendedCard property value. Whether agent supports authenticated extended card retrieval
     * @param bool|null $value Value to set for the supportsAuthenticatedExtendedCard property.
    */
    public function setSupportsAuthenticatedExtendedCard(?bool $value): void {
        $this->getBackingStore()->set('supportsAuthenticatedExtendedCard', $value);
    }

    /**
     * Sets the version property value. Version of the agent implementation
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
