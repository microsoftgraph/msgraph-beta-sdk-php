<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyPresentationListBox extends GroupPolicyUploadedPresentation implements Parsable 
{
    /**
     * @var bool|null $explicitValue If this option is specified true the user must specify the registry subkey value and the registry subkey name. The list box shows two columns, one for the name and one for the data. The default value is false.
    */
    private ?bool $explicitValue = null;
    
    /**
     * @var string|null $valuePrefix Not yet documented
    */
    private ?string $valuePrefix = null;
    
    /**
     * Instantiates a new GroupPolicyPresentationListBox and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.groupPolicyPresentationListBox');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyPresentationListBox
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyPresentationListBox {
        return new GroupPolicyPresentationListBox();
    }

    /**
     * Gets the explicitValue property value. If this option is specified true the user must specify the registry subkey value and the registry subkey name. The list box shows two columns, one for the name and one for the data. The default value is false.
     * @return bool|null
    */
    public function getExplicitValue(): ?bool {
        return $this->explicitValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'explicitValue' => function (ParseNode $n) use ($o) { $o->setExplicitValue($n->getBooleanValue()); },
            'valuePrefix' => function (ParseNode $n) use ($o) { $o->setValuePrefix($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the valuePrefix property value. Not yet documented
     * @return string|null
    */
    public function getValuePrefix(): ?string {
        return $this->valuePrefix;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('explicitValue', $this->explicitValue);
        $writer->writeStringValue('valuePrefix', $this->valuePrefix);
    }

    /**
     * Sets the explicitValue property value. If this option is specified true the user must specify the registry subkey value and the registry subkey name. The list box shows two columns, one for the name and one for the data. The default value is false.
     *  @param bool|null $value Value to set for the explicitValue property.
    */
    public function setExplicitValue(?bool $value ): void {
        $this->explicitValue = $value;
    }

    /**
     * Sets the valuePrefix property value. Not yet documented
     *  @param string|null $value Value to set for the valuePrefix property.
    */
    public function setValuePrefix(?string $value ): void {
        $this->valuePrefix = $value;
    }

}
