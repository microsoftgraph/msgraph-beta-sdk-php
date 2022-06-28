<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DomainDnsCnameRecord extends DomainDnsRecord implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $canonicalName The canonical name of the CNAME record. Used to configure the CNAME record at the DNS host.
    */
    private ?string $canonicalName = null;
    
    /**
     * Instantiates a new DomainDnsCnameRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DomainDnsCnameRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DomainDnsCnameRecord {
        return new DomainDnsCnameRecord();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the canonicalName property value. The canonical name of the CNAME record. Used to configure the CNAME record at the DNS host.
     * @return string|null
    */
    public function getCanonicalName(): ?string {
        return $this->canonicalName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'canonicalName' => function (ParseNode $n) use ($o) { $o->setCanonicalName($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('canonicalName', $this->canonicalName);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the canonicalName property value. The canonical name of the CNAME record. Used to configure the CNAME record at the DNS host.
     *  @param string|null $value Value to set for the canonicalName property.
    */
    public function setCanonicalName(?string $value ): void {
        $this->canonicalName = $value;
    }

}
