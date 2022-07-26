<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FileThreatSubmission extends ThreatSubmission implements Parsable 
{
    /**
     * @var string|null $fileName It specifies the file name to be submitted.
    */
    private ?string $fileName = null;
    
    /**
     * Instantiates a new FileThreatSubmission and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.fileThreatSubmission');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileThreatSubmission
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileThreatSubmission {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.fileContentThreatSubmission': return new FileContentThreatSubmission();
                case '#microsoft.graph.security.fileUrlThreatSubmission': return new FileUrlThreatSubmission();
            }
        }
        return new FileThreatSubmission();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fileName' => function (ParseNode $n) use ($o) { $o->setFileName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the fileName property value. It specifies the file name to be submitted.
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('fileName', $this->fileName);
    }

    /**
     * Sets the fileName property value. It specifies the file name to be submitted.
     *  @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value ): void {
        $this->fileName = $value;
    }

}
