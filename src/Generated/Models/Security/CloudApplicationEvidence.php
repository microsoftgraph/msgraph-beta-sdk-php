<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudApplicationEvidence extends AlertEvidence implements Parsable 
{
    /**
     * @var int|null $appId The appId property
    */
    private ?int $appId = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var int|null $instanceId The instanceId property
    */
    private ?int $instanceId = null;
    
    /**
     * @var string|null $instanceName The instanceName property
    */
    private ?string $instanceName = null;
    
    /**
     * @var int|null $saasAppId The saasAppId property
    */
    private ?int $saasAppId = null;
    
    /**
     * Instantiates a new CloudApplicationEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudApplicationEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudApplicationEvidence {
        return new CloudApplicationEvidence();
    }

    /**
     * Gets the appId property value. The appId property
     * @return int|null
    */
    public function getAppId(): ?int {
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
            'appId' => function (ParseNode $n) use ($o) { $o->setAppId($n->getIntegerValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'instanceId' => function (ParseNode $n) use ($o) { $o->setInstanceId($n->getIntegerValue()); },
            'instanceName' => function (ParseNode $n) use ($o) { $o->setInstanceName($n->getStringValue()); },
            'saasAppId' => function (ParseNode $n) use ($o) { $o->setSaasAppId($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the instanceId property value. The instanceId property
     * @return int|null
    */
    public function getInstanceId(): ?int {
        return $this->instanceId;
    }

    /**
     * Gets the instanceName property value. The instanceName property
     * @return string|null
    */
    public function getInstanceName(): ?string {
        return $this->instanceName;
    }

    /**
     * Gets the saasAppId property value. The saasAppId property
     * @return int|null
    */
    public function getSaasAppId(): ?int {
        return $this->saasAppId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('appId', $this->appId);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeIntegerValue('instanceId', $this->instanceId);
        $writer->writeStringValue('instanceName', $this->instanceName);
        $writer->writeIntegerValue('saasAppId', $this->saasAppId);
    }

    /**
     * Sets the appId property value. The appId property
     *  @param int|null $value Value to set for the appId property.
    */
    public function setAppId(?int $value ): void {
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
     * Sets the instanceId property value. The instanceId property
     *  @param int|null $value Value to set for the instanceId property.
    */
    public function setInstanceId(?int $value ): void {
        $this->instanceId = $value;
    }

    /**
     * Sets the instanceName property value. The instanceName property
     *  @param string|null $value Value to set for the instanceName property.
    */
    public function setInstanceName(?string $value ): void {
        $this->instanceName = $value;
    }

    /**
     * Sets the saasAppId property value. The saasAppId property
     *  @param int|null $value Value to set for the saasAppId property.
    */
    public function setSaasAppId(?int $value ): void {
        $this->saasAppId = $value;
    }

}
