<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSAssociatedDomainsItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $applicationIdentifier The application identifier of the app to associate domains with.
    */
    private ?string $applicationIdentifier = null;
    
    /**
     * @var bool|null $directDownloadsEnabled Determines whether data should be downloaded directly or via a CDN.
    */
    private ?bool $directDownloadsEnabled = null;
    
    /**
     * @var array<string>|null $domains The list of domains to associate.
    */
    private ?array $domains = null;
    
    /**
     * Instantiates a new macOSAssociatedDomainsItem and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSAssociatedDomainsItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSAssociatedDomainsItem {
        return new MacOSAssociatedDomainsItem();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applicationIdentifier property value. The application identifier of the app to associate domains with.
     * @return string|null
    */
    public function getApplicationIdentifier(): ?string {
        return $this->applicationIdentifier;
    }

    /**
     * Gets the directDownloadsEnabled property value. Determines whether data should be downloaded directly or via a CDN.
     * @return bool|null
    */
    public function getDirectDownloadsEnabled(): ?bool {
        return $this->directDownloadsEnabled;
    }

    /**
     * Gets the domains property value. The list of domains to associate.
     * @return array<string>|null
    */
    public function getDomains(): ?array {
        return $this->domains;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicationIdentifier' => function (ParseNode $n) use ($o) { $o->setApplicationIdentifier($n->getStringValue()); },
            'directDownloadsEnabled' => function (ParseNode $n) use ($o) { $o->setDirectDownloadsEnabled($n->getBooleanValue()); },
            'domains' => function (ParseNode $n) use ($o) { $o->setDomains($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('applicationIdentifier', $this->applicationIdentifier);
        $writer->writeBooleanValue('directDownloadsEnabled', $this->directDownloadsEnabled);
        $writer->writeCollectionOfPrimitiveValues('domains', $this->domains);
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
     * Sets the applicationIdentifier property value. The application identifier of the app to associate domains with.
     *  @param string|null $value Value to set for the applicationIdentifier property.
    */
    public function setApplicationIdentifier(?string $value ): void {
        $this->applicationIdentifier = $value;
    }

    /**
     * Sets the directDownloadsEnabled property value. Determines whether data should be downloaded directly or via a CDN.
     *  @param bool|null $value Value to set for the directDownloadsEnabled property.
    */
    public function setDirectDownloadsEnabled(?bool $value ): void {
        $this->directDownloadsEnabled = $value;
    }

    /**
     * Sets the domains property value. The list of domains to associate.
     *  @param array<string>|null $value Value to set for the domains property.
    */
    public function setDomains(?array $value ): void {
        $this->domains = $value;
    }

}
