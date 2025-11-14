<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\SecurityCopilot;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Workspace extends Entity implements Parsable 
{
    /**
     * Instantiates a new Workspace and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Workspace
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Workspace {
        return new Workspace();
    }

    /**
     * Gets the displayName property value. Name of the Security Copilot workspace.
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
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'plugins' => fn(ParseNode $n) => $o->setPlugins($n->getCollectionOfObjectValues([Plugin::class, 'createFromDiscriminatorValue'])),
            'sessions' => fn(ParseNode $n) => $o->setSessions($n->getCollectionOfObjectValues([Session::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the plugins property value. Represents plugins in Security Copilot.
     * @return array<Plugin>|null
    */
    public function getPlugins(): ?array {
        $val = $this->getBackingStore()->get('plugins');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Plugin::class);
            /** @var array<Plugin>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'plugins'");
    }

    /**
     * Gets the sessions property value. Represents sessions in Security Copilot.
     * @return array<Session>|null
    */
    public function getSessions(): ?array {
        $val = $this->getBackingStore()->get('sessions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Session::class);
            /** @var array<Session>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sessions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('plugins', $this->getPlugins());
        $writer->writeCollectionOfObjectValues('sessions', $this->getSessions());
    }

    /**
     * Sets the displayName property value. Name of the Security Copilot workspace.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the plugins property value. Represents plugins in Security Copilot.
     * @param array<Plugin>|null $value Value to set for the plugins property.
    */
    public function setPlugins(?array $value): void {
        $this->getBackingStore()->set('plugins', $value);
    }

    /**
     * Sets the sessions property value. Represents sessions in Security Copilot.
     * @param array<Session>|null $value Value to set for the sessions property.
    */
    public function setSessions(?array $value): void {
        $this->getBackingStore()->set('sessions', $value);
    }

}
