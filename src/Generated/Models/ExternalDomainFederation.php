<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExternalDomainFederation extends IdentitySource implements Parsable 
{
    /**
     * @var string|null $displayName The name of the identity source, typically also the domain name. Read only.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $domainName The domain name. Read only.
    */
    private ?string $domainName = null;
    
    /**
     * @var string|null $issuerUri The issuerURI of the incoming federation. Read only.
    */
    private ?string $issuerUri = null;
    
    /**
     * Instantiates a new ExternalDomainFederation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.externalDomainFederation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternalDomainFederation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExternalDomainFederation {
        return new ExternalDomainFederation();
    }

    /**
     * Gets the displayName property value. The name of the identity source, typically also the domain name. Read only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the domainName property value. The domain name. Read only.
     * @return string|null
    */
    public function getDomainName(): ?string {
        return $this->domainName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'domainName' => function (ParseNode $n) use ($o) { $o->setDomainName($n->getStringValue()); },
            'issuerUri' => function (ParseNode $n) use ($o) { $o->setIssuerUri($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the issuerUri property value. The issuerURI of the incoming federation. Read only.
     * @return string|null
    */
    public function getIssuerUri(): ?string {
        return $this->issuerUri;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('domainName', $this->domainName);
        $writer->writeStringValue('issuerUri', $this->issuerUri);
    }

    /**
     * Sets the displayName property value. The name of the identity source, typically also the domain name. Read only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the domainName property value. The domain name. Read only.
     *  @param string|null $value Value to set for the domainName property.
    */
    public function setDomainName(?string $value ): void {
        $this->domainName = $value;
    }

    /**
     * Sets the issuerUri property value. The issuerURI of the incoming federation. Read only.
     *  @param string|null $value Value to set for the issuerUri property.
    */
    public function setIssuerUri(?string $value ): void {
        $this->issuerUri = $value;
    }

}
