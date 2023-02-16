<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsAppSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new TeamsAppSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsAppSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsAppSettings {
        return new TeamsAppSettings();
    }

    /**
     * Gets the allowUserRequestsForAppAccess property value. Indicates whether Teams users are allowed to request admins access to certain Teams apps.
     * @return bool|null
    */
    public function getAllowUserRequestsForAppAccess(): ?bool {
        return $this->getBackingStore()->get('allowUserRequestsForAppAccess');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowUserRequestsForAppAccess' => fn(ParseNode $n) => $o->setAllowUserRequestsForAppAccess($n->getBooleanValue()),
            'isChatResourceSpecificConsentEnabled' => fn(ParseNode $n) => $o->setIsChatResourceSpecificConsentEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isChatResourceSpecificConsentEnabled property value. Indicates whether resource-specific consent for chats/meetings has been enabled for the tenant. If true, Teams apps that are allowed in the tenant and require resource-specific permissions can be installed inside chats and meetings. If false, the installation of any Teams app that requires resource-specific permissions in a chat or a meeting will be blocked.
     * @return bool|null
    */
    public function getIsChatResourceSpecificConsentEnabled(): ?bool {
        return $this->getBackingStore()->get('isChatResourceSpecificConsentEnabled');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowUserRequestsForAppAccess', $this->getAllowUserRequestsForAppAccess());
        $writer->writeBooleanValue('isChatResourceSpecificConsentEnabled', $this->getIsChatResourceSpecificConsentEnabled());
    }

    /**
     * Sets the allowUserRequestsForAppAccess property value. Indicates whether Teams users are allowed to request admins access to certain Teams apps.
     * @param bool|null $value Value to set for the allowUserRequestsForAppAccess property.
    */
    public function setAllowUserRequestsForAppAccess(?bool $value): void {
        $this->getBackingStore()->set('allowUserRequestsForAppAccess', $value);
    }

    /**
     * Sets the isChatResourceSpecificConsentEnabled property value. Indicates whether resource-specific consent for chats/meetings has been enabled for the tenant. If true, Teams apps that are allowed in the tenant and require resource-specific permissions can be installed inside chats and meetings. If false, the installation of any Teams app that requires resource-specific permissions in a chat or a meeting will be blocked.
     * @param bool|null $value Value to set for the isChatResourceSpecificConsentEnabled property.
    */
    public function setIsChatResourceSpecificConsentEnabled(?bool $value): void {
        $this->getBackingStore()->set('isChatResourceSpecificConsentEnabled', $value);
    }

}
