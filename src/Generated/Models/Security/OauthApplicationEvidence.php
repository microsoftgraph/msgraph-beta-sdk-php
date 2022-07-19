<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OauthApplicationEvidence extends AlertEvidence implements Parsable 
{
    /**
     * @var string|null $appId The appId property
    */
    private ?string $appId = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $objectId The objectId property
    */
    private ?string $objectId = null;
    
    /**
     * @var string|null $publisher The publisher property
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
     * Gets the appId property value. The appId property
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->appId;
    }

    /**
     * Gets the displayName property value. The displayName property
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
            'appId' => function (ParseNode $n) use ($o) { $o->setAppId($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'objectId' => function (ParseNode $n) use ($o) { $o->setObjectId($n->getStringValue()); },
            'publisher' => function (ParseNode $n) use ($o) { $o->setPublisher($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the objectId property value. The objectId property
     * @return string|null
    */
    public function getObjectId(): ?string {
        return $this->objectId;
    }

    /**
     * Gets the publisher property value. The publisher property
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
     * Sets the appId property value. The appId property
     *  @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value ): void {
        $this->appId = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the objectId property value. The objectId property
     *  @param string|null $value Value to set for the objectId property.
    */
    public function setObjectId(?string $value ): void {
        $this->objectId = $value;
    }

    /**
     * Sets the publisher property value. The publisher property
     *  @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value ): void {
        $this->publisher = $value;
    }

}
