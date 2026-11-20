<?php

namespace Microsoft\Graph\Beta\Generated\Security\ContentManagement\Repositories\MicrosoftGraphSecurityContentManagementDiscoverAvailableRepositories;

use Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement\RepositoryAccessCredential;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DiscoverAvailableRepositoriesPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DiscoverAvailableRepositoriesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DiscoverAvailableRepositoriesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DiscoverAvailableRepositoriesPostRequestBody {
        return new DiscoverAvailableRepositoriesPostRequestBody();
    }

    /**
     * Gets the accessCredential property value. Provider credential used to establish or refresh repository access. The concrete type(set via `@odata.type`) selects the credential style. All fields are input only and arenever returned.
     * @return RepositoryAccessCredential|null
    */
    public function getAccessCredential(): ?RepositoryAccessCredential {
        $val = $this->getBackingStore()->get('accessCredential');
        if (is_null($val) || $val instanceof RepositoryAccessCredential) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessCredential'");
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessCredential' => fn(ParseNode $n) => $o->setAccessCredential($n->getObjectValue([RepositoryAccessCredential::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('accessCredential', $this->getAccessCredential());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accessCredential property value. Provider credential used to establish or refresh repository access. The concrete type(set via `@odata.type`) selects the credential style. All fields are input only and arenever returned.
     * @param RepositoryAccessCredential|null $value Value to set for the accessCredential property.
    */
    public function setAccessCredential(?RepositoryAccessCredential $value): void {
        $this->getBackingStore()->set('accessCredential', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

}
