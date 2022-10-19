<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OauthApplicationEvidence extends AlertEvidence implements Parsable 
{
    /**
     * @var string|null $appId Unique identifier of the application.
    */
    private ?string $appId = null;
    
    /**
     * @var string|null $displayName Name of the application.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $objectId The unique identifier of the application object in Azure AD.
    */
    private ?string $objectId = null;
    
    /**
     * @var string|null $publisher The name of the application publisher.
    */
    private ?string $publisher = null;
    
    /**
     * Instantiates a new OauthApplicationEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.oauthApplicationEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OauthApplicationEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OauthApplicationEvidence {
        return new OauthApplicationEvidence();
    }

    /**
     * Gets the appId property value. Unique identifier of the application.
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->appId;
    }

    /**
     * Gets the displayName property value. Name of the application.
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
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'objectId' => fn(ParseNode $n) => $o->setObjectId($n->getStringValue()),
            'publisher' => fn(ParseNode $n) => $o->setPublisher($n->getStringValue()),
        ]);
    }

    /**
     * Gets the objectId property value. The unique identifier of the application object in Azure AD.
     * @return string|null
    */
    public function getObjectId(): ?string {
        return $this->objectId;
    }

    /**
     * Gets the publisher property value. The name of the application publisher.
     * @return string|null
    */
    public function getPublisher(): ?string {
        return $this->publisher;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appId', $this->appId);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('objectId', $this->objectId);
        $writer->writeStringValue('publisher', $this->publisher);
    }

    /**
     * Sets the appId property value. Unique identifier of the application.
     *  @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value ): void {
        $this->appId = $value;
    }

    /**
     * Sets the displayName property value. Name of the application.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the objectId property value. The unique identifier of the application object in Azure AD.
     *  @param string|null $value Value to set for the objectId property.
    */
    public function setObjectId(?string $value ): void {
        $this->objectId = $value;
    }

    /**
     * Sets the publisher property value. The name of the application publisher.
     *  @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value ): void {
        $this->publisher = $value;
    }

}
