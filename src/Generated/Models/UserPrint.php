<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserPrint implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<PrinterShare>|null $recentPrinterShares The recentPrinterShares property */
    private ?array $recentPrinterShares = null;
    
    /**
     * Instantiates a new userPrint and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserPrint
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UserPrint {
        return new UserPrint();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'recentPrinterShares' => function (self $o, ParseNode $n) { $o->setRecentPrinterShares($n->getCollectionOfObjectValues(PrinterShare::class)); },
        ];
    }

    /**
     * Gets the recentPrinterShares property value. The recentPrinterShares property
     * @return array<PrinterShare>|null
    */
    public function getRecentPrinterShares(): ?array {
        return $this->recentPrinterShares;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('recentPrinterShares', $this->recentPrinterShares);
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
     * Sets the recentPrinterShares property value. The recentPrinterShares property
     *  @param array<PrinterShare>|null $value Value to set for the recentPrinterShares property.
    */
    public function setRecentPrinterShares(?array $value ): void {
        $this->recentPrinterShares = $value;
    }

}
