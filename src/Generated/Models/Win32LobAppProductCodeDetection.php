<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Win32LobAppProductCodeDetection extends Win32LobAppDetection implements Parsable 
{
    /**
     * @var string|null $productCode The product code of Win32 Line of Business (LoB) app.
    */
    private ?string $productCode = null;
    
    /**
     * @var string|null $productVersion The product version of Win32 Line of Business (LoB) app.
    */
    private ?string $productVersion = null;
    
    /**
     * @var Win32LobAppDetectionOperator|null $productVersionOperator The operator to detect product version. Possible values are: notConfigured, equal, notEqual, greaterThan, greaterThanOrEqual, lessThan, lessThanOrEqual.
    */
    private ?Win32LobAppDetectionOperator $productVersionOperator = null;
    
    /**
     * Instantiates a new Win32LobAppProductCodeDetection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppProductCodeDetection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppProductCodeDetection {
        return new Win32LobAppProductCodeDetection();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'productCode' => function (ParseNode $n) use ($o) { $o->setProductCode($n->getStringValue()); },
            'productVersion' => function (ParseNode $n) use ($o) { $o->setProductVersion($n->getStringValue()); },
            'productVersionOperator' => function (ParseNode $n) use ($o) { $o->setProductVersionOperator($n->getEnumValue(Win32LobAppDetectionOperator::class)); },
        ]);
    }

    /**
     * Gets the productCode property value. The product code of Win32 Line of Business (LoB) app.
     * @return string|null
    */
    public function getProductCode(): ?string {
        return $this->productCode;
    }

    /**
     * Gets the productVersion property value. The product version of Win32 Line of Business (LoB) app.
     * @return string|null
    */
    public function getProductVersion(): ?string {
        return $this->productVersion;
    }

    /**
     * Gets the productVersionOperator property value. The operator to detect product version. Possible values are: notConfigured, equal, notEqual, greaterThan, greaterThanOrEqual, lessThan, lessThanOrEqual.
     * @return Win32LobAppDetectionOperator|null
    */
    public function getProductVersionOperator(): ?Win32LobAppDetectionOperator {
        return $this->productVersionOperator;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('productCode', $this->productCode);
        $writer->writeStringValue('productVersion', $this->productVersion);
        $writer->writeEnumValue('productVersionOperator', $this->productVersionOperator);
    }

    /**
     * Sets the productCode property value. The product code of Win32 Line of Business (LoB) app.
     *  @param string|null $value Value to set for the productCode property.
    */
    public function setProductCode(?string $value ): void {
        $this->productCode = $value;
    }

    /**
     * Sets the productVersion property value. The product version of Win32 Line of Business (LoB) app.
     *  @param string|null $value Value to set for the productVersion property.
    */
    public function setProductVersion(?string $value ): void {
        $this->productVersion = $value;
    }

    /**
     * Sets the productVersionOperator property value. The operator to detect product version. Possible values are: notConfigured, equal, notEqual, greaterThan, greaterThanOrEqual, lessThan, lessThanOrEqual.
     *  @param Win32LobAppDetectionOperator|null $value Value to set for the productVersionOperator property.
    */
    public function setProductVersionOperator(?Win32LobAppDetectionOperator $value ): void {
        $this->productVersionOperator = $value;
    }

}
